<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class CaptchaException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class CaptchaException extends ApiException
{
    /**
     * CaptchaException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(14, 'Captcha needed', $error);
	}
}
