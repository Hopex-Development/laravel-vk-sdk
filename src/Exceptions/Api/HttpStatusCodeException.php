<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Class HttpStatusCodeException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class HttpStatusCodeException extends ApiException
{
    /**
     * HttpStatusCodeException constructor.
     */
	public function __construct()
    {
		parent::__construct('Invalid http status code');
	}
}

