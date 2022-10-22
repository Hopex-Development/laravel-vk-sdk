<?php

namespace Hopex\VkSdk\Exceptions\Api;

use Exception;
use Hopex\VkSdk\Facades\SdkConfig;

/**
 * Class ApiExceptionMapper
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiExceptionMapper
{
    /** @var array|string[]  */
    private static array $errors = [
        '1' => "Unknown error occurred",
        '2' => "Application is disabled. Enable your application or use test mode",
        '3' => "Unknown method passed",
        '4' => "Incorrect signature",
        '5' => "User authorization failed",
        '6' => "Too many requests per second",
        '7' => "Permission to perform this action is denied",
        '8' => "Invalid request",
        '9' => "Flood control",
        '10' => "Internal server error",
        '11' => "In test mode application should be disabled or user should be authorized",
        '14' => "Captcha needed",
        '15' => "Access denied",
        '16' => "HTTP authorization failed",
        '17' => "Validation required",
        '18' => "User was deleted or banned",
        '20' => "Permission to perform this action is denied for non-standalone applications",
        '21' => "Permission to perform this action is allowed only for standalone and OpenAPI applications",
        '23' => "This method was disabled",
        '24' => "Confirmation required",
        '25' => "Token confirmation required",
        '27' => "Group authorization failed",
        '28' => "Application authorization failed",
        '29' => "Rate limit reached",
        '30' => "This profile is private",
        '100' => "One of the parameters specified was missing or invalid",
        '101' => "Invalid application API ID",
        '113' => "Invalid user id",
        '150' => "Invalid timestamp",
        '200' => "Access denied",
        '201' => "Access denied",
        '203' => "Access to group denied",
        '300' => "This album is full",
        '500' => "Permission denied. You must enable votes processing in application settings",
        '600' => "Permission denied. You have no access to operations specified with given object(s)",
        '603' => "Some ads error occurred",
    ];

    /**
     * @param $code
     * @return mixed|string|null
     */
    public static function parse($code): mixed
    {
        return self::$errors[$code] ?? null;
    }
}
