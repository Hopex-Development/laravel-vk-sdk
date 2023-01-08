<?php

namespace Hopex\VkSdk\Contracts;

use Hopex\VkSdk\Foundation\Core\Entities\Server\Ban;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Message;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Mute;
use Hopex\VkSdk\Foundation\Core\Entities\Server\ServerEvent;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Statistics;

/**
 * Interface ServerEventsContract
 * @package Hopex\VkSdk\Contracts
 */
interface ServerEventsContract
{
    /**
     * @param Mute $mute
     * @return void
     */
    public function server_mute_new(Mute $mute): void;

    /**
     * @param Ban $ban
     * @return void
     */
    public function server_ban_new(Ban $ban): void;

    /**
     * @param Statistics $statistics
     * @return void
     */
    public function server_statistic(Statistics $statistics): void;

    /**
     * @param Message $message
     * @return void
     */
    public function server_message_new(Message $message): void;

    /**
     * @param int $groupId
     * @return void
     */
    public function requestStatistics(int $groupId): void;

    /**
     * @param ServerEvent $event
     * @param string $message
     * @return void
     */
    public function messageSendToVk(ServerEvent $event, string $message): void;

    /**
     * @param int $groupId
     * @param int $peerId
     * @param string $name
     * @param string $text
     * @return void
     */
    public function messageSendToServer(int $groupId, int $peerId, string $name, string $text): void;

    /**
     * @param int $groupId
     * @param string $command
     * @return void
     */
    public function sourceQueryCall(int $groupId, string $command): void;
}
