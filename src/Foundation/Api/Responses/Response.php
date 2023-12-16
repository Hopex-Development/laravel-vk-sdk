<?php

namespace Hopex\VkSdk\Foundation\Api\Responses;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Api\Entities\Entity;
use Throwable;

/**
 * The base object describing the VK response.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses
 */
abstract class Response extends Entity
{
    /**
     * The base object describing the VK response.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param array $fields
     *
     * @throws Throwable
     * @throws ApiException
     */
    public function __construct(array $fields)
    {
        parent::__construct($fields);

        throw_if(
            !empty(data_get($fields, 'error')),
            ApiException::class,
            data_get($fields, 'error.error_code', 1)
        );

        $this->fields = data_get($fields, 'response', $fields);
    }

    /**
     * It will be executed when reading data from inaccessible (protected or private) or non-existent properties.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $field
     *
     * @return mixed
     */
    public function __get(string $field): mixed
    {
        return data_get($this->fields, snake($field));
    }
}
