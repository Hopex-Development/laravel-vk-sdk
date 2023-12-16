<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

/**
 * Group configuration model.
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
     * The group id.
     *
     * @version SDK: 3
     *
     * @return int|null
     */
    public function groupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * A confirmation code for connection with the group.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function confirmation(): ?string
    {
        return $this->confirmation;
    }

    /**
     * The token for using on requests via group.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function token(): ?string
    {
        return $this->token;
    }

    /**
     * A secret code to confirm the validity of the request
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function secretCode(): ?string
    {
        return $this->secretCode;
    }

    /**
     * Is it necessary to verify the validity of an incoming request.
     *
     * @version SDK: 3
     *
     * @return bool|null
     */
    public function needSecretVerify(): ?bool
    {
        return $this->needSecretVerify;
    }

    /**
     * Whether to allow repeated requests for a single event.
     *
     * @version SDK: 3
     *
     * @return bool|null
     */
    public function allowRetryEvents(): ?bool
    {
        return $this->allowRetryEvents;
    }

    /**
     * Full path of callback event handler.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function callbackEventsHandler(): ?string
    {
        return $this->callbackEventsHandler;
    }

    /**
     * Full path of long pool event handler.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function longPoolEventsHandler(): ?string
    {
        return $this->longPoolEventsHandler;
    }
}
