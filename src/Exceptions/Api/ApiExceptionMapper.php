<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Api exception mapper.
 *
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiExceptionMapper
{
    private static array $errors = [
        '1' => [
            'message' => 'Unknown error occurred',
            'description' => 'Try to repeat the request later',
        ],
        '2' => [
            'message' => 'Application is disabled. Enable your application or use test mode',
            'description' => 'You need to enable the app in the settings https://vk.com/editapp?id={Your API_ID} or use test mode (test_mode=1)',
        ],
        '3' => [
            'message' => 'Unknown method passed',
            'description' => 'Check if the name of the method being called is correct: vk.com/dev/methods',
        ],
        '4' => [
            'message' => 'Incorrect signature',
        ],
        '5' => [
            'message' => 'User authorization failed',
            'description' => 'Make sure that you are using the correct authorization scheme',
        ],
        '6' => [
            'message' => 'Too many requests per second',
            'description' => 'Set a longer interval between calls or use the execute method. For more information about the limits on the frequency of calls, see the page vk.com/dev/api_requests',
        ],
        '7' => [
            'message' => 'Permission to perform this action is denied',
            'description' => 'Check whether the necessary access rights have been obtained during authorization. This can be done using the account.getAppPermissions method',
        ],
        '8' => [
            'message' => 'Invalid request',
            'description' => 'Check the query syntax and the list of parameters used (it can be found on the method description page)',
        ],
        '9' => [
            'message' => 'Flood control',
            'description' => 'It is necessary to reduce the number of similar requests. For more efficient work, you can use execute or JSONP',
        ],
        '10' => [
            'message' => 'Internal server error',
            'description' => 'Try to repeat the request later',
        ],
        '11' => [
            'message' => 'In test mode application should be disabled or user should be authorized',
            'description' => 'Turn off the app in the settings https://vk.com/editapp?id={Your API_ID}',
        ],
        '14' => [
            'message' => 'Captcha needed',
            'description' => 'The process of handling this error is described in detail on a separate page: https://dev.vk.com/en/api/captcha-error',
        ],
        '15' => [
            'message' => 'Access denied',
            'description' => 'Make sure that you are using the correct identifiers and that the full version of the site has access to the content for the current user',
        ],
        '16' => [
            'message' => 'HTTP authorization failed',
            'description' => 'To avoid such an error, in a Standalone application, you can pre-check the status of this setting with the user using the account.getInfo method',
        ],
        '17' => [
            'message' => 'Validation required',
            'description' => 'The action requires confirmation — it is necessary to redirect the user to the service page for validation',
        ],
        '18' => [
            'message' => 'User was deleted or banned',
            'description' => "The user's page has been deleted or blocked",
        ],
        '20' => [
            'message' => 'Permission to perform this action is denied for non-standalone applications',
            'description' => 'If the error occurs despite the fact that your application is of the Standalone type, make sure that you use redirect_uri=https://oauth.vk.com/blank.html. For more information, see vk.com/dev/auth_mobile',
        ],
        '21' => [
            'message' => 'Permission to perform this action is allowed only for standalone and OpenAPI applications',
        ],
        '23' => [
            'message' => 'This method was disabled',
            'description' => 'All current VK API methods that are currently available are listed here: vk.com/dev/methods',
        ],
        '24' => [
            'message' => 'Confirmation required',
        ],
        '25' => [
            'message' => 'Token confirmation required',
        ],
        '27' => [
            'message' => 'Group authorization failed',
        ],
        '28' => [
            'message' => 'Application authorization failed',
        ],
        '29' => [
            'message' => 'Rate limit reached',
        ],
        '30' => [
            'message' => 'This profile is private',
            'description' => 'The information requested about the profile is not available with the access key used',
        ],
        '100' => [
            'message' => 'One of the parameters specified was missing or invalid',
            'description' => 'Check the list of required parameters and their format on the method description page',
        ],
        '101' => [
            'message' => 'Invalid application API ID',
            'description' => 'Find the application in the list of managed applications on the page https://vk.com/apps?act=settings and specify the correct API_ID (application ID) in the request',
        ],
        '113' => [
            'message' => 'Invalid user id',
            'description' => 'Make sure that you are using the correct ID. You can get an ID by a short name using the utils.resolveScreenName method',
        ],
        '150' => [
            'message' => 'Invalid timestamp',
            'description' => 'You can get the current value using the utils.getServerTime method',
        ],
        '200' => [
            'message' => 'Access denied',
            'description' => 'Make sure that you are using the correct identifiers (for users, owner_id is positive, for communities — negative), and access to the requested content for the current user is available in the full version of the site',
        ],
        '201' => [
            'message' => 'Access denied',
            'description' => 'Make sure that you are using the correct identifiers (for users, owner_id is positive, for communities — negative), and access to the requested content for the current user is available in the full version of the site',
        ],
        '203' => [
            'message' => 'Access to group denied',
            'description' => 'Make sure that the current user is a member or leader of the community (for private and private groups and meetings)',
        ],
        '300' => [
            'message' => 'This album is full',
            'description' => 'Before continuing, you need to remove unnecessary objects from the album or use another album',
        ],
        '500' => [
            'message' => 'Permission denied. You must enable votes processing in application settings',
            'description' => 'Check the application settings: https://vk.com/editapp?id={Your API_ID}&section=payments',
        ],
        '600' => [
            'message' => 'Permission denied. You have no access to operations specified with given object(s)',
        ],
        '603' => [
            'message' => 'Some ads error occurred',
        ],
    ];

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param $code
     *
     * @return string|null
     */
    public static function parse($code): ?string
    {
        if (empty(self::$errors[$code])) {
            return null;
        } else {
            $error = self::$errors[$code];
            $trans = fn ($text) => preg_replace(
                '~vk-sdk\.~',
                '',
                __("vk-sdk.$text")
            );

            return "[$code] {$trans(data_get($error, 'message'))}".(
            !empty(data_get($error, 'description'))
                ? ". {$trans(data_get($error, 'description'))}."
                : ''
            ) ?? null;
        }
    }
}
