<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Databse\Fields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\VkApi;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class CountryField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class CountryField
{
    private const ID = 'id';
    private const TITLE = 'title';

    /**
     * @var Collection
     */
    public Collection $country;

    /**
     * CountryField constructor.
     * Use token only when country is ID of country.
     *
     * @param int|array|Collection $country
     * @param string|null $token
     * @throws ApiException
     * @throws Throwable
     */
    public function __construct(int|array|Collection $country, string $token = null)
    {
        if ($country instanceof Collection) {
            $this->country = $country;
        } elseif (is_a($country, 'array')) {
            $this->country = collect($country);
        } else {
            $this->country = VkApi::database($token)->getCountryById($country);
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->country->get(self::ID);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->country->get(self::TITLE);
    }
}
