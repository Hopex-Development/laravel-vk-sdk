<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Responses\Response;

/**
 * After successful completion, return `true`.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 *
 * @link    https://dev.vk.com/en/method/users.report
 */
class UsersReportResponse extends Response
{
    /**
     * After successful completion, return `true`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool
     */
    public function completion(): bool
    {
        return compare(1, $this->response);
    }
}
