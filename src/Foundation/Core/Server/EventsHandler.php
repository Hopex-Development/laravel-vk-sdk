<?php

namespace Hopex\VkSdk\Foundation\Core\Server;

use Hopex\VkSdk\Contracts\ServerEventsContract;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\SourceQuery\AuthenticationSourceQueryException;
use Hopex\VkSdk\Exceptions\SourceQuery\InvalidArgumentSourceQueryException;
use Hopex\VkSdk\Exceptions\SourceQuery\InvalidPacketSourceQueryException;
use Hopex\VkSdk\Exceptions\SourceQuery\SocketSourceQueryException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Formatters\ClearOutPutMessageFormatter;
use Hopex\VkSdk\Formatters\ScoreTableFormatter;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Ban;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Message;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Mute;
use Hopex\VkSdk\Foundation\Core\Entities\Server\ServerEvent;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Statistics;
use Hopex\VkSdk\Foundation\Core\Logging\ServerLogger;
use Psr\Log\LoggerInterface;
use Throwable;
use xPaw\SourceQuery\Exception\AuthenticationException;
use xPaw\SourceQuery\Exception\InvalidArgumentException;
use xPaw\SourceQuery\Exception\InvalidPacketException;
use xPaw\SourceQuery\Exception\SocketException;
use xPaw\SourceQuery\SourceQuery;

/**
 * Class EventsHandler
 * @package Hopex\VkSdk\Foundation\Core\RequestsMapper
 */
abstract class EventsHandler extends ServerLogger implements ServerEventsContract
{
    /** @var LoggerInterface */
    protected LoggerInterface $logger;

    /** @var string */
    protected const SUCCESS = 'ok';

    /**
     * @param Message $message
     * @return void
     * @throws ApiException
     * @throws Throwable
     */
    public function server_message_new(Message $message): void
    {
        $this->logger->notice("Message from server by \"{$message->getPlayer()}\". Context: \"{$message->getText()}\"");
        $this->messageSendToVk($message, str_replace([
            '%PLAYER%',
            '%MESSAGE%'
        ], [
            $message->getPlayer(),
            $message->getText()
        ], Note::get('server.messages.from-server')));
    }

    /**
     * @param Mute $mute
     * @return void
     * @throws ApiException
     * @throws Throwable
     */
    public function server_mute_new(Mute $mute): void
    {
        $this->logger->notice("Mute from server by \"{$mute->getAdminName()}\" for \"{$mute->getPlayerName()}\"");
        $this->messageSendToVk($mute, str_replace([
            '%ADMIN%',
            '%PLAYER%',
            '%REASON%',
            '%TIME%'
        ], [
            $mute->getAdminName(),
            $mute->getPlayerName(),
            $mute->getReason(),
            $mute->getTime()->format('H:i:s'),
        ], Note::get('server.blocks.mute')));
    }

    /**
     * @param Ban $ban
     * @return void
     * @throws ApiException
     * @throws Throwable
     */
    public function server_ban_new(Ban $ban): void
    {
        $this->logger->notice("Ban from server by \"{$ban->getAdminName()}\" for \"{$ban->getPlayerName()}\"");
        $this->messageSendToVk($ban, str_replace([
            '%ADMIN%',
            '%PLAYER%',
            '%REASON%',
            '%TIME%'
        ], [
            $ban->getAdminName(),
            $ban->getPlayerName(),
            $ban->getReason(),
            $ban->getTime()->format('H:i:s'),
        ], Note::get('server.blocks.ban')));
    }

    /**
     * @inheritDoc
     * @throws Throwable
     */
    public function server_statistic(Statistics $statistics): void
    {
        $scoreTable[] = Note::get('server.scores.header');
        $row = Note::get('server.scores.row');
        $footer = Note::get('server.scores.footer');
        $this->messageSendToVk($statistics, (new ScoreTableFormatter())->format([
            'stats' => $statistics,
            'score_table' => $scoreTable,
            'row' => $row,
            'footer' => $footer,
        ]));
    }

    /**
     * @param int $groupId
     * @return void
     * @throws AuthenticationSourceQueryException
     * @throws InvalidArgumentSourceQueryException
     * @throws InvalidPacketSourceQueryException
     * @throws SocketSourceQueryException
     */
    public function requestStatistics(int $groupId): void
    {
        $this->logger->info("Statistic requested from group $groupId");
        $this->sourceQueryCall($groupId, 'sm_chat_stats');
    }

    /**
     * @param int $groupId
     * @param int $peerId
     * @param string $name
     * @param string $text
     * @return void
     * @throws AuthenticationSourceQueryException
     * @throws InvalidArgumentSourceQueryException
     * @throws InvalidPacketSourceQueryException
     * @throws SocketSourceQueryException
     */
    public function messageSendToServer(int $groupId, int $peerId, string $name, string $text): void
    {
        $this->logger->info("ServerMessage \"$text\" from \"$name\" has been send to server by group $groupId");
        $this->sourceQueryCall($groupId, "sm_chat_say \"$name\" \"$text\"");
    }

    /**
     * @param ServerEvent $event
     * @param string $message
     * @return void
     * @throws Throwable
     * @throws ApiException
     */
    public function messageSendToVk(ServerEvent $event, string $message): void
    {
        VkApi::message($event->getGroupToken())
            ->send((new MessageRequestFields())
                ->setPeerId($event->getPeerId())
                ->setDisableMentions(true)
                ->setDontParseLinks(true)
                ->setMessage((new ClearOutPutMessageFormatter())->format($message))
            );
        $this->logger->info("Message send to chat id {$event->getPeerId()}");
    }

    /**
     * @throws InvalidArgumentSourceQueryException
     * @throws SocketSourceQueryException
     * @throws AuthenticationSourceQueryException
     * @throws InvalidPacketSourceQueryException
     */
    public function sourceQueryCall(int $groupId, string $command): void
    {
        $serverConfig = SdkConfig::groups("$groupId.target_server");
        $ip = preg_replace('~(.*):(\d+)$~', '$1', $serverConfig);
        $port = preg_replace('~(.*):(\d+)$~', '$2', $serverConfig);
        $password = SdkConfig::servers($ip, $port, 'rcon_password');
        $sourceQuery = new SourceQuery();

        try {
            $sourceQuery->Connect($ip, $port);
            $sourceQuery->SetRconPassword($password);
            $sourceQuery->Rcon($command);
            $this->logger->info('Rcon successfully');
        } catch (InvalidArgumentException) {
            throw new InvalidArgumentSourceQueryException();
        } catch (SocketException) {
            throw new SocketSourceQueryException();
        } catch (AuthenticationException) {
            throw new AuthenticationSourceQueryException();
        } catch (InvalidPacketException) {
            throw new InvalidPacketSourceQueryException();
        } finally {
            $sourceQuery->Disconnect();
            $this->logger->info('SourceQuery connection closed');
        }
    }
}
