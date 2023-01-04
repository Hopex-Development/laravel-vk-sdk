<?php

namespace Hopex\VkSdk\Foundation;

/**
 * Class Configure
 * @package Hopex\VkSdk\Foundation
 */
class SdkConfig
{
    private const CONFIG_PREFIX = 'vk-sdk';
    private const CONFIG_ROUTES = 'routes';
    private const CONFIG_API = 'api';
    private const CONFIG_GROUPS = 'groups';
    private const CONFIG_LOGGING = 'logging';
    private const CONFIG_APPS = 'apps';

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function query(string $key = null): array|string|null
    {
        return config(self::CONFIG_PREFIX . (!$key ? null : ".$key"));
    }

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function routes(string $key = null): array|string|null
    {
        return $this->query(self::CONFIG_ROUTES . (!$key ? null : ".$key"));
    }

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function logging(string $key = null): array|string|null
    {
        return $this->query(self::CONFIG_LOGGING . (!$key ? null : ".$key"));
    }

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function api(string $key = null): array|string|null
    {
        return $this->query(self::CONFIG_API . (!$key ? null : ".$key"));
    }

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function groups(string $key = null): array|string|null
    {
        return $this->query(self::CONFIG_GROUPS . (!$key ? null : ".$key"));
    }

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function apps(string $key = null): array|string|null
    {
        return $this->query(self::CONFIG_APPS . (!$key ? null : ".$key"));
    }
}
