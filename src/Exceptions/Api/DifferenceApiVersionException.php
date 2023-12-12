<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Difference api version exception.
 *
 * @package Hopex\VkSdk\Exceptions\Api
 */
class DifferenceApiVersionException extends ApiException
{
    public $message = 'The API version [%s] used by the service differs from the one specified by in the configuration [%s].';

    public function __construct(string|float $serviceApiVersion, string|float $configApiVersion)
    {
        parent::__construct(message: $this->format($serviceApiVersion, $configApiVersion));
    }
}
