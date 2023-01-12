<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\SourceBans;

use Carbon\Carbon;

/**
 * Class Ban
 * @package Hopex\VkSdk\Foundation\Core\Entities\SourceBans
 */
class Ban
{
    /**
     * @var int
     */
    public int $blockId;

    /**
     * @var string|null
     */
    public ?string $ip;

    /**
     * @var string
     */
    public string $steamId;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var Carbon
     */
    public Carbon $created;

    /**
     * @var Carbon
     */
    public Carbon $expires;

    /**
     * @var int
     */
    public int $length;

    /**
     * @var string
     */
    public string $reason;

    /**
     * @var int
     */
    public int $accountId;

    /**
     * @var string
     */
    public string $adminIp;

    /**
     * @var int
     */
    public int $sessionId;

    /**
     * @var string|null
     */
    public ?string $country;

    /**
     * @var int|null
     */
    public ?int $removedBy;

    /**
     * @var string|null
     */
    public ?string $removeType;

    /**
     * @var int|null
     */
    public ?int $removedOn;

    /**
     * @var bool
     */
    public bool $type;

    /**
     * @var string|null
     */
    public ?string $updateReason;


    /**
     * Ban constructor.
     * @param object $ban
     */
    public function __construct(object $ban)
    {
        $this->setBlockId($ban->bid);
        $this->setIp($ban->ip);
        $this->setSteamId($ban->authid);
        $this->setName($ban->name);
        $this->setCreated($ban->created);
        $this->setExpires($ban->ends);
        $this->setLength($ban->length);
        $this->setReason($ban->reason);
        $this->setAccountId($ban->aid);
        $this->setAdminIp($ban->adminIp);
        $this->setSessionId($ban->sid);
        $this->setCountry($ban->country);
        $this->setRemovedBy($ban->RemovedBy);
        $this->setRemoveType($ban->RemoveType);
        $this->setRemovedOn($ban->RemovedOn);
        $this->setType($ban->type);
        $this->setUpdateReason($ban->ureason);
    }

    /**
     * @return int
     */
    public function getBlockId(): int
    {
        return $this->blockId;
    }

    /**
     * @param int $blockId
     */
    public function setBlockId(int $blockId): void
    {
        $this->blockId = $blockId;
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
     */
    public function setIp(?string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getSteamId(): string
    {
        return $this->steamId;
    }

    /**
     * @param string $steamId
     */
    public function setSteamId(string $steamId): void
    {
        $this->steamId = $steamId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Carbon
     */
    public function getCreated(): Carbon
    {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated(int $created): void
    {
        $this->created = new Carbon($created);
    }

    /**
     * @return Carbon
     */
    public function getExpires(): Carbon
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     */
    public function setExpires(int $expires): void
    {
        $this->expires = new Carbon($expires);
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId(int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getAdminIp(): string
    {
        return $this->adminIp;
    }

    /**
     * @param string $adminIp
     */
    public function setAdminIp(string $adminIp): void
    {
        $this->adminIp = $adminIp;
    }

    /**
     * @return int
     */
    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    /**
     * @param int $sessionId
     */
    public function setSessionId(int $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return int|null
     */
    public function getRemovedBy(): ?int
    {
        return $this->removedBy;
    }

    /**
     * @param int|null $removedBy
     */
    public function setRemovedBy(?int $removedBy): void
    {
        $this->removedBy = $removedBy;
    }

    /**
     * @return string|null
     */
    public function getRemoveType(): ?string
    {
        return $this->removeType;
    }

    /**
     * @param string|null $removeType
     */
    public function setRemoveType(?string $removeType): void
    {
        $this->removeType = $removeType;
    }

    /**
     * @return int|null
     */
    public function getRemovedOn(): ?int
    {
        return $this->removedOn;
    }

    /**
     * @param int|null $removedOn
     */
    public function setRemovedOn(?int $removedOn): void
    {
        $this->removedOn = $removedOn;
    }

    /**
     * @return bool
     */
    public function isType(): bool
    {
        return $this->type;
    }

    /**
     * @param bool $type
     */
    public function setType(bool $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getUpdateReason(): ?string
    {
        return $this->updateReason;
    }

    /**
     * @param string|null $updateReason
     */
    public function setUpdateReason(?string $updateReason): void
    {
        $this->updateReason = $updateReason;
    }

}
