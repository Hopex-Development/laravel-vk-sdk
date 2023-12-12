<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

/**
 * Group.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 *
 * @property string $longPoolEventsHandler
 * @property string $callbackEventsHandler
 * @property bool   $allowRetryEvents
 * @property bool   $needSecretVerify
 * @property string $secretCode
 * @property string $token
 * @property string $confirmation
 * @property int    $groupId
 */
class Group extends Model
{

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int|null
     */
    public function groupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function confirmation(): ?string
    {
        return $this->confirmation;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function token(): ?string
    {
        return $this->token;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function secretCode(): ?string
    {
        return $this->secretCode;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool|null
     */
    public function needSecretVerify(): ?bool
    {
        return $this->needSecretVerify;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool|null
     */
    public function allowRetryEvents(): ?bool
    {
        return $this->allowRetryEvents;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function callbackEventsHandler(): ?string
    {
        return $this->callbackEventsHandler;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function longPoolEventsHandler(): ?string
    {
        return $this->longPoolEventsHandler;
    }
}
