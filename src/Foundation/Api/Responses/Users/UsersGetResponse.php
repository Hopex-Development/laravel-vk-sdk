<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\Responses\Response;
use Illuminate\Support\Collection;

/**
 * Users get response.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 */
class UsersGetResponse extends Response
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return Collection|User|false
     */
    public function users(): Collection|User|false
    {
        if (count($this->response) > 1) {
            return collect(array_map(fn (array $response) => new User($response), $this->response));
        } elseif (count($this->response) == 1) {
            return new User($this->response[0]);
        } else {
            return false;
        }
    }
}
