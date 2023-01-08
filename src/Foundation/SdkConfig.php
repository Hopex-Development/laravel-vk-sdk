<?php

namespace Hopex\VkSdk\Foundation;

/**
 * Class Configure
 * @package Hopex\VkSdk\Foundation
 */
class SdkConfig
{
    /** @var string */
    private const CONFIG_PREFIX = 'vk-sdk';

    /** @var string */
    private const CONFIG_ROUTES = 'routes';

    /** @var string */

    private const CONFIG_API = 'api';

    /** @var string */

    private const CONFIG_GROUPS = 'groups';

    /** @var string */
    private const CONFIG_SERVERS = 'servers';

    /** @var string */

    private const CONFIG_LOGGING = 'logging';

    /** @var string */

    private const CONFIG_AUTH_APP = 'auth_app';

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
    public function query(string $key = null): array|string|null
    {
        return config(self::CONFIG_PREFIX . (!$key ? null : ".$key"));
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
     * @param string $ip
     * @param int $port
     * @param string|null $key
     * @return array|string|null
     */
    public function servers(string $ip, int $port, string $key = null): array|string|null
    {
        return $this->query(
            self::CONFIG_SERVERS . '.' .
            str_replace('.', '-', $ip) . "-$port" .
            (!$key ? null : ".$key")
        );
    }

    /**
     * @param string|null $key
     * @return array|string|null
     */
    public function authApp(string $key = null): array|string|null
    {
        return $this->query(self::CONFIG_AUTH_APP . (!$key ? null : ".$key"));
    }
}
