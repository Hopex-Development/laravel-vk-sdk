<?php

namespace Hopex\VkSdk\Foundation\Core\Callback;

use Illuminate\Support\Facades\Session;

/**
 * Class SessionTokens
 * @package Hopex\VkSdk\Foundation\Core\Callback
 */
trait SessionTokens
{
    /** @var string */
    private string $groupToken;

    /** @var string */
    private string $serviceToken;

    /** @var int */
    private int $groupId;

    public function __construct()
    {
        // TODO: добавить исключения при обнаружении пустых токенов

        $this->setServiceToken(Session::get('service_token'));
        $this->setGroupToken(Session::get('group_token'));
        $this->setGroupId(Session::get('group_id'));
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getGroupToken(): string
    {
        return $this->groupToken;
    }

    /**
     * @param string $groupToken
     * @return void
     */
    public function setGroupToken(string $groupToken): void
    {
        $this->groupToken = $groupToken;
    }

    /**
     * @return string
     */
    public function getServiceToken(): string
    {
        return $this->serviceToken;
    }

    /**
     * @param string $serviceToken
     * @return void
     */
    public function setServiceToken(string $serviceToken): void
    {
        $this->serviceToken = $serviceToken;
    }
}
