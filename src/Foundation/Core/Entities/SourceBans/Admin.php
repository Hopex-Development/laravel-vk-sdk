<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\SourceBans;

use Carbon\Carbon;

/**
 * Class Admin
 * @package Hopex\VkSdk\Foundation\Core\Entities\SourceBans
 */
class Admin
{
    /**
     * @var int
     */
    public int $accountId;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $steamId;

    /**
     * @var string
     */
    public string $password;

    /**
     * @var int
     */
    public int $guardId;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string|null
     */
    public ?string $validate;

    /**
     * @var int
     */
    public int $extraFlags;

    /**
     * @var int
     */
    public int $immunity;

    /**
     * @var string|null
     */
    public ?string $serverGroup;

    /**
     * @var string|null
     */
    public ?string $serverFlags;

    /**
     * @var string|null
     */
    public ?string $serverPassword;

    /**
     * @var int|Carbon|null
     */
    public Carbon|int|null $lastVisit;

    /**
     * @var int|Carbon|null
     */
    public Carbon|int|null $expired;

    /**
     * @var string|null
     */
    public ?string $skype;

    /**
     * @var string|null
     */
    public ?string $comment;

    /**
     * @var string|null
     */
    public ?string $vk;

    /**
     * @var int|null
     */
    public ?int $support;

    /**
     * Admin constructor.
     * @param object $admin
     */
    public function __construct(object $admin)
    {
        $this->setAccountId($admin->aid);
        $this->setName($admin->user);
        $this->setSteamId($admin->authid);
        $this->setPassword($admin->password);
        $this->setGuardId($admin->gid);
        $this->setEmail($admin->email);
        $this->setValidate($admin->validate);
        $this->setExtraFlags($admin->extraflags);
        $this->setImmunity($admin->immunity);
        $this->setServerGroup($admin->srv_group);
        $this->setServerFlags($admin->srv_flags);
        $this->setServerPassword($admin->srv_password);
        $this->setLastVisit($admin->lastvisit);
        $this->setExpired($admin->expired);
        $this->setSkype($admin->skype);
        $this->setComment($admin->comment);
        $this->setVk($admin->vk);
        $this->setSupport($admin->support);
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
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getGuardId(): int
    {
        return $this->guardId;
    }

    /**
     * @param int $guardId
     */
    public function setGuardId(int $guardId): void
    {
        $this->guardId = $guardId;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getValidate(): ?string
    {
        return $this->validate;
    }

    /**
     * @param string|null $validate
     */
    public function setValidate(?string $validate): void
    {
        $this->validate = $validate;
    }

    /**
     * @return int
     */
    public function getExtraFlags(): int
    {
        return $this->extraFlags;
    }

    /**
     * @param int $extraFlags
     */
    public function setExtraFlags(int $extraFlags): void
    {
        $this->extraFlags = $extraFlags;
    }

    /**
     * @return int
     */
    public function getImmunity(): int
    {
        return $this->immunity;
    }

    /**
     * @param int $immunity
     */
    public function setImmunity(int $immunity): void
    {
        $this->immunity = $immunity;
    }

    /**
     * @return string|null
     */
    public function getServerGroup(): ?string
    {
        return $this->serverGroup;
    }

    /**
     * @param string|null $serverGroup
     */
    public function setServerGroup(?string $serverGroup): void
    {
        $this->serverGroup = $serverGroup;
    }

    /**
     * @return string|null
     */
    public function getServerFlags(): ?string
    {
        return $this->serverFlags;
    }

    /**
     * @param string|null $serverFlags
     */
    public function setServerFlags(?string $serverFlags): void
    {
        $this->serverFlags = $serverFlags;
    }

    /**
     * @return string|null
     */
    public function getServerPassword(): ?string
    {
        return $this->serverPassword;
    }

    /**
     * @param string|null $serverPassword
     */
    public function setServerPassword(?string $serverPassword): void
    {
        $this->serverPassword = $serverPassword;
    }

    /**
     * @return Carbon|null
     */
    public function getLastVisit(): ?Carbon
    {
        return $this->lastVisit;
    }

    /**
     * @param int|null $lastVisit
     */
    public function setLastVisit(?int $lastVisit): void
    {
        $this->lastVisit = $lastVisit ? new Carbon($lastVisit) : $lastVisit;
    }

    /**
     * @return Carbon|null
     */
    public function getExpired(): ?Carbon
    {
        return $this->expired;
    }

    /**
     * @param int|null $expired
     */
    public function setExpired(?int $expired): void
    {
        $this->expired = $expired ? new Carbon($expired) : $expired;
    }

    /**
     * @return string|null
     */
    public function getSkype(): ?string
    {
        return $this->skype;
    }

    /**
     * @param string|null $skype
     */
    public function setSkype(?string $skype): void
    {
        $this->skype = $skype;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string|null
     */
    public function getVk(): ?string
    {
        return $this->vk;
    }

    /**
     * @param string|null $vk
     */
    public function setVk(?string $vk): void
    {
        $this->vk = $vk;
    }

    /**
     * @return int|null
     */
    public function getSupport(): ?int
    {
        return $this->support;
    }

    /**
     * @param int|null $support
     */
    public function setSupport(?int $support): void
    {
        $this->support = $support;
    }
}
