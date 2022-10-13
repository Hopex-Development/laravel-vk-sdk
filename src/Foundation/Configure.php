<?php

namespace Hopex\VkSdk\Foundation;

use Illuminate\Support\Collection;
use phpDocumentor\Reflection\Types\Mixed_;

/**
 * Class Configure
 * @package Hopex\VkSdk\Foundation
 */
class Configure
{
    private const CONFIG_PREFIX        = 'vk-sdk';
    private const CONFIG_ROUTES        = 'routes';
    private const CONFIG_API           = 'api';
    private const CONFIG_GROUPS        = 'groups';
    private const CONFIG_LOGGING       = 'logging';
    private const CONFIG_ERRORS        = 'errors';

    /**
     * Общий запрос к конфигурации.
     *
     * @param string|null $key
     * @return array|string|null
     */
    public function query(string $key = null): array|string|null
    {
        return config(self::CONFIG_PREFIX . (!$key ? null : ".$key"));
    }

    /**
     * Конфигурация маршрутизации.
     *
     * @param string|null $key
     * @return array|string|Collection|null
     */
    public function routes(string $key = null): array|string|Collection|null
    {
        return $this->query(self::CONFIG_ROUTES . (!$key ? null : ".$key"));
    }

    /**
     * Конфигурация логирования.
     *
     * @param string|null $key
     * @return array|string|Collection|null
     */
    public function logging(string $key = null): array|string|Collection|null
    {
        return $this->query(self::CONFIG_LOGGING . (!$key ? null : ".$key"));
    }

    /**
     * Конфигурация подключения к API.
     *
     * @param string|null $key
     * @return array|string|Collection|null
     */
    public function api(string $key = null): array|string|Collection|null
    {
        return $this->query(self::CONFIG_API . (!$key ? null : ".$key"));
    }

    /**
     * Конфигурация групп.
     *
     * @param string|null $key
     * @return array|string|Collection|null
     */
    public function groups(string $key = null): array|string|Collection|null
    {
        return $this->query(self::CONFIG_GROUPS . (!$key ? null : ".$key"));
    }

    /**
     * Конфигурация ошибок API.
     *
     * @param string|null $key
     * @param bool $needCollection
     * @return array|string|Collection|null
     */
    public function errors(string $key = null): array|string|Collection|null
    {
        return $this->query(self::CONFIG_ERRORS . (!$key ? null : ".$key"));
    }
}
