<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Server;

use Hopex\VkSdk\Exceptions\Server\UnknownServerException;
use Hopex\VkSdk\Facades\SdkConfig;
use Throwable;

/**
 * Class ServerEvent
 * @package Hopex\VkSdk\Foundation\Core\RequestsMapper
 */
abstract class ServerEvent
{
    /**
     * @var string
     */
    private string $ip;

    /**
     * @var int
     */
    private int $port;

    /**
     * @var int
     */
    private int $groupId;

    /**
     * @var int
     */
    private int $peerId;

    /**
     * @var string
     */
    private string $groupToken;

    /**
     * @throws Throwable
     */
    public function __construct(array $event)
    {
        throw_if(!isset($event['server_ip'], $event['server_port']), UnknownServerException::class);

        $this->setIp($event['server_ip']);
        $this->setPort($event['server_port']);
        $this->setGroupId(SdkConfig::servers($this->getIp(), $this->getPort(), 'target_group_id'));
        $this->setPeerId(SdkConfig::groups("{$this->getGroupId()}.server_peer_id"));
        $this->setGroupToken(SdkConfig::groups("{$this->getGroupId()}.token"));
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->peerId;
    }

    /**
     * @return string
     */
    public function getGroupToken(): string
    {
        return $this->groupToken;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param string $ip
     */
    private function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @param int $port
     */
    private function setPort(int $port): void
    {
        $this->port = $port;
    }

    /**
     * @param int $groupId
     */
    private function setGroupId(int $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @param int $peerId
     */
    private function setPeerId(int $peerId): void
    {
        $this->peerId = $peerId;
    }

    /**
     * @param string $groupToken
     */
    private function setGroupToken(string $groupToken): void
    {
        $this->groupToken = $groupToken;
    }
}
