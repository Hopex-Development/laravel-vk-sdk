<?php

namespace Hopex\VkSdk\Foundation;

use Carbon\Carbon;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\SourceQuery\AuthenticationSourceQueryException;
use Hopex\VkSdk\Exceptions\SourceQuery\InvalidArgumentSourceQueryException;
use Hopex\VkSdk\Exceptions\SourceQuery\InvalidPacketSourceQueryException;
use Hopex\VkSdk\Exceptions\SourceQuery\SocketSourceQueryException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageRequestFields;
use Illuminate\Support\Facades\Log;
use Throwable;
use xPaw\SourceQuery\Exception\AuthenticationException;
use xPaw\SourceQuery\Exception\InvalidArgumentException;
use xPaw\SourceQuery\Exception\InvalidPacketException;
use xPaw\SourceQuery\Exception\SocketException;
use xPaw\SourceQuery\SourceQuery;

/**
 * Class Server
 * @package Hopex\VkSdk\Foundation
 */
class Server
{
    public function reSendMute()
    {

    }

    /**
     * @param int $groupId
     * @return void
     * @throws InvalidArgumentSourceQueryException
     * @throws SocketSourceQueryException
     * @throws AuthenticationSourceQueryException
     * @throws InvalidPacketSourceQueryException
     */
    public function requestStatistics(int $groupId): void
    {
        $serverConfig = SdkConfig::groups("$groupId.target_server");
        $ip = preg_replace('~(.*):(\d+)$~', '$1', $serverConfig);
        $port = preg_replace('~(.*):(\d+)$~', '$2', $serverConfig);
        $password = SdkConfig::servers($ip, $port, 'rcon_password');

        $sourceQuery = new SourceQuery();
        try {
            $sourceQuery = new SourceQuery();
            $sourceQuery->Connect($ip, $port);
            $sourceQuery->SetRconPassword($password);
            $response = $sourceQuery->Rcon('sm_chat_stats');

            if ($response && $response != 'ok') {
                Log::build((array)SdkConfig::logging('channels.server'))->notice($response);
            }
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
        }
    }

    /**
     * @param array $event
     * @return void
     * @throws ApiException
     * @throws Throwable
     */
    public function reSendStatistics(array $event): void
    {
        Log::build((array)SdkConfig::logging('channels.server'))->notice($event);

        $ip = $event['server_ip'];
        $port = $event['server_port'];
        $scoreTable[] = Note::get('score-table-header');
        $row = Note::get('score-table-row');
        $footer = Note::get('score-table-footer');

        $groupId = SdkConfig::servers($ip, $port, 'target_group_id');
        $groupServerPeerId = SdkConfig::groups("$groupId.server_peer_id");
        $groupToken = SdkConfig::groups("$groupId.token");

        if (count($event['players']) < 1) {
            $scoreTable = array_merge($scoreTable, [
                __('vk-sdk.There are no players on the server!')
            ]);
        } else {
            foreach ($event['players'] as $player) {
                $team = '4NO TEAM';
                switch ($player['team']) {
                    case '1':
                        $team = '3SPEC';
                        break;
                    case '2':
                        $team = '2T';
                        break;
                    case '3':
                        $team = '1CT';
                        break;
                }

                $replacement = SdkConfig::query('replacement');
                $forbidden = implode('|', $replacement['forbidden']);
                $scoreTable = array_merge($scoreTable, [
                    str_replace([
                        '%COMMAND%',
                        '%NIK%',
                        '%SCORE%',
                        '%TIME%',
                        '%MUTE%'
                    ], [
                        $team,
                        preg_replace("~$forbidden~", $replacement['replace_to'], $player['name']),
                        sprintf('%d/%d', $player['kills'], $player['deaths']),
                        (new Carbon($player['time']))->format('H:i:s'),
                        (isset($player['mute']) && $player['mute'] != 0 ? '| 🔇' : '')
                    ], $row)
                ]);
            }

            sort($scoreTable);
            foreach ($scoreTable as $index => $item) {
                if (preg_match('~(^.*)(3S|4N)~', $item)) {
                    $scoreTable = array_merge(array_slice($scoreTable, 0, $index), [
                        $footer
                    ], array_slice($scoreTable, $index, count($scoreTable)));
                    break;
                }
            }
            $scoreTable = array_map(function ($item) {
                return preg_replace('~(^.*)(\d)(C|T|S|N)~', '$1$3', $item);
            }, $scoreTable);
        }

        $scoreTable = str_replace([
            '%MAP%',
            '%TOTAL%',
            '%ALIVE%'
        ], [
            $event['map'],
            count($event['players']) + $event['bots'],
            count($event['players'])
        ],
            implode('', $scoreTable)
        );

        VkApi::message($groupToken)
            ->send((new MessageRequestFields())
                ->setPeerId($groupServerPeerId)
                ->setDisableMentions(true)
                ->setDontParseLinks(true)
                ->setMessage($scoreTable)
            );
    }
}
