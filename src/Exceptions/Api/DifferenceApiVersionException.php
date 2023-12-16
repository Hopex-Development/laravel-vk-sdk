<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Difference api version exception.
 *
 * @package Hopex\VkSdk\Exceptions\Api
 */
class DifferenceApiVersionException extends ApiException
{
    /**
     * @inheritdoc
     */
    public $message = 'The API version [%s] used by the service differs from the one specified by in the configuration [%s].';

    /**
     * Difference api version exception.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string|float $serviceApiVersion The API version of the service.
     * @param string|float $configApiVersion The API version specified in the configuration.
     */
    public function __construct(string|float $serviceApiVersion, string|float $configApiVersion)
    {
        parent::__construct(message: $this->format($serviceApiVersion, $configApiVersion));
    }
}
