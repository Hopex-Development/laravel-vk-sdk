<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Databse\Fields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\VkApi;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class CityField
 * @package Hopex\VkSdk\Foundation\Core\Models\Databse\Fields
 */
class CityField
{
    private const ID = 'id';
    private const TITLE = 'title';

    /**
     * @var Collection
     */
    public Collection $city;

    /**
     * CityField constructor.
     * Use token only when city is ID of city.
     *
     * @param int|array|Collection $city
     * @param string|null $userOrServiceToken
     * @throws ApiException
     * @throws Throwable
     */
    public function __construct(int|array|Collection $city, string $userOrServiceToken = null)
    {
        if ($city instanceof Collection) {
            $this->city = $city;
        } elseif (is_a($city, 'array')) {
            $this->city = collect($city);
        } else {
            $this->city = VkApi::database($userOrServiceToken)->getCityById($city);
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->city->get(self::ID);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->city->get(self::TITLE);
    }
}
