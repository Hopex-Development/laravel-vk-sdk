<?php

namespace Hopex\VkSdk\Foundation\Api\Responses;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Illuminate\Support\Str;
use Throwable;

/**
 * Response.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses
 */
abstract class Response
{
    protected array $response;

    /**
     * Response.
     *
     * @param array $response
     *
     * @throws Throwable
     * @throws ApiException
     */
    public function __construct(array $response)
    {
        throw_if(
            !empty(data_get($response, 'error')),
            ApiException::class,
            data_get($response, 'error.error_code', 1)
        );
        $this->response = data_get($response, 'response', $response);
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $field
     *
     * @return mixed
     */
    public function __get(string $field): mixed
    {
        return data_get($this->response, snake($field));
    }
}
