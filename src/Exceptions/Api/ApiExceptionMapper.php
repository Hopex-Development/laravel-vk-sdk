<?php

namespace Hopex\VkSdk\Exceptions\Api;

use Exception;
use Hopex\VkSdk\Facades\Configure;

/**
 * Class ApiExceptionMapper
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiExceptionMapper
{
    /**
     * Поиск возникшей ошибки среди базовых ошибок VK API.
     *
     * @param ApiError $error
     * @return Exception
     */
    final public static function parse(ApiError $error): Exception
    {
        if (Configure::errors($error->getErrorCode()) instanceof ApiException) {
            return new (Configure::errors($error->getErrorCode()))($error);
        } else {
            return new ApiException($error->getErrorCode(), $error->getErrorMsg(), $error);
        }
    }
}
