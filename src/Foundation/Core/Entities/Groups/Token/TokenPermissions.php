<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Groups\Token;

use Illuminate\Support\Collection;

/**
 * Class TokenPermissions
 * @package Hopex\VkSdk\Foundation\Core\Entities\Groups\Token
 */
class TokenPermissions
{
    /** @var Collection  */
    private Collection $tokenPermissions;

    private const MASK = 'mask';
    private const PERMISSIONS = 'permissions';
    private const SETTING = 'setting';
    private const NAME = 'name';

    /**
     * TokenPermissions constructor.
     * @param Collection|array $tokenPermissions
     */
    public function __construct(Collection|array $tokenPermissions)
    {
        $this->tokenPermissions = $tokenPermissions instanceof Collection
            ? $tokenPermissions
            : collect($tokenPermissions);
    }

    /**
     * @return int
     */
    public function getMask(): int
    {
        return $this->tokenPermissions->get(self::MASK);
    }

    /**
     * @return Collection
     */
    public function getPermissions(): Collection
    {
        return collect($this->tokenPermissions->get(self::PERMISSIONS))->map(function ($permission) {
            return new TokenPermissionsFields($permission);
        });
    }
}
