<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Information about the user's phone numbers. If the data is specified and not hidden by the privacy settings.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#contacts
 *
 * @property-read string $mobilePhone
 * @property-read string $homePhone
 * @property-read string $site
 */
class Contacts extends AbstractEntity
{
    /**
     * Mobile phone number of the user (only for Standalone applications).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#contacts
     *
     * @return string
     */
    public function mobilePhone(): string
    {
        return $this->mobilePhone ?? '';
    }

    /**
     * Additional phone number of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#contacts
     *
     * @return string
     */
    public function homePhone(): string
    {
        return $this->homePhone ?? '';
    }

    /**
     * The address of the site indicated in the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#site
     *
     * @return string
     */
    public function site(): string
    {
        return $this->site ?? '';
    }
}
