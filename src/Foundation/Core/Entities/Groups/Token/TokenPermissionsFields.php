<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Groups\Token;

use Illuminate\Support\Collection;

/**
 * Class TokenPermissionsFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Groups\Token
 */
class TokenPermissionsFields
{
    /** @var Collection  */
    private Collection $permissions;

    private const SETTING = 'setting';
    private const NAME = 'name';

    /**
     * TokenPermissions constructor.
     * @param Collection|array $permissions
     */
    public function __construct(Collection|array $permissions)
    {
        $this->permissions = $permissions instanceof Collection
            ? $permissions
            : collect($permissions);
    }

    /**
     * @return int
     */
    public function getSetting(): int
    {
        return $this->permissions->get(self::SETTING);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->permissions->get(self::NAME);
    }
}
