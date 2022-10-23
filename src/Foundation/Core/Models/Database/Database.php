<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class Database
 * @package Hopex\VkSdk\Foundation\Core\Models\Database
 */
class Database extends Request
{
    /** @var string  */
    private const SCOPE = 'database.';

    /**
     * @param array $args
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCitiesById(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getCitiesById', $args);
    }

    /**
     * @param array $args
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountriesById(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getCountriesById', $args);
    }
}
