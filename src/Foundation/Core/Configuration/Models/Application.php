<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

/**
 * Application.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 *
 * @property-read int $appId
 * @property-read string $secureKey
 * @property-read string $serviceAccessKey
 * @property-read string $redirectUri
 */
class Application extends Model
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|int|null
     */
    public function appId(): string|int|null
    {
        return $this->appId;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function secureKey(): ?string
    {
        return $this->secureKey;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function serviceAccessKey(): ?string
    {
        return $this->serviceAccessKey;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function redirectUri(): ?string
    {
        return $this->redirectUri;
    }
}
