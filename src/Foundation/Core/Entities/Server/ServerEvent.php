<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Server;

use Hopex\VkSdk\Exceptions\Server\UnknownServerException;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Models\Application;
use Throwable;

/**
 * Class ServerEvent
 * @package Hopex\VkSdk\Foundation\Core\RequestsMapper
 */
abstract class ServerEvent
{
    /**
     * @var null|string
     */
    private ?string $ip = null;

    /**
     * @var null|int
     */
    private ?int $port = null;

    /**
     * @var null|int
     */
    private ?int $groupId = null;

    /**
     * @var null|int
     */
    private ?int $peerId = null;

    /**
     * @var null|string
     */
    private ?string $groupToken = null;

    /**
     * @throws Throwable
     */
    public function __construct(array $event)
    {
        throw_if(!isset($event['server_ip'], $event['server_port']), UnknownServerException::class);

        $groupId = SdkConfig::servers(
            $event['server_ip'],
            $event['server_port'],
            'target_group_id'
        );

        $this
            ->setIp($event['server_ip'])
            ->setPort($event['server_port'])
            ->setGroupId($groupId)
            ->setPeerId(SdkConfig::groups("$groupId.chats.prod_peer_id"))
            ->setGroupToken(SdkConfig::groups("$groupId.token"));

        if (!Application::isProductionFor($groupId)) {
            $this->setPeerId(SdkConfig::groups("$groupId.chats.dev_peer_id"));
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @param string|null $ip
     * @return ServerEvent
     */
    private function setIp(?string $ip): ServerEvent
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * @param int|null $port
     * @return ServerEvent
     */
    private function setPort(?int $port): ServerEvent
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @param int|null $groupId
     * @return ServerEvent
     */
    private function setGroupId(?int $groupId): ServerEvent
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPeerId(): ?int
    {
        return $this->peerId;
    }

    /**
     * @param int|null $peerId
     * @return ServerEvent
     */
    private function setPeerId(?int $peerId): ServerEvent
    {
        $this->peerId = $peerId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroupToken(): ?string
    {
        return $this->groupToken;
    }

    /**
     * @param string|null $groupToken
     * @return ServerEvent
     */
    private function setGroupToken(?string $groupToken): ServerEvent
    {
        $this->groupToken = $groupToken;
        return $this;
    }
}
