<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

/**
 * Application configuration model.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 *
 * @property-read int $appId
 * @property-read string $secureKey
 * @property-read string $serviceAccessKey
 * @property-read string $redirectUri
 */
class Application extends AbstractModel
{
    /**
     * The application id.
     *
     * @version SDK: 3
     *
     * @return string|int|null
     */
    public function appId(): string|int|null
    {
        return $this->appId;
    }

    /**
     * Application Security Key.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function secureKey(): ?string
    {
        return $this->secureKey;
    }

    /**
     * Application Access Key.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function serviceAccessKey(): ?string
    {
        return $this->serviceAccessKey;
    }

    /**
     * The forwarding address where the user will be directed after successful authorization.
     *
     * @version SDK: 3
     *
     * @return string|null
     */
    public function redirectUri(): ?string
    {
        return $this->redirectUri;
    }
}
