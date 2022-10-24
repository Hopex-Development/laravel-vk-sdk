<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class CityField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class CityField
{
    private const ID = 'id';
    private const CITY_IDS = 'city_ids';
    private const TITLE = 'title';

    /**
     * @var Collection
     */
    public Collection $city;

    /**
     * CityField constructor.
     * Use token when city is ID of city.
     *
     * @param int|array|Collection $city
     * @param string|null $token
     * @throws ApiException
     * @throws Throwable
     */
    public function __construct(int|array|Collection $city, string $token = null)
    {
        if ($city instanceof Collection) {
            $this->city = $city;
        } elseif (is_a($city, 'array')) {
            $this->city = collect($city);
        } else {
            $this->city = collect(VkApi::database($token)
                ->getCitiesById([
                    self::CITY_IDS => $city
                ])
                ->first()
            );
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
