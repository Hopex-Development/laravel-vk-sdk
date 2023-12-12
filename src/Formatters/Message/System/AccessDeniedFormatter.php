<?php

namespace Hopex\VkSdk\Formatters\Message\System;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Facades\RequestFields;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserProfileFields;
use Throwable;

/**
 * Class AccessDeniedFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage\System
 */
class AccessDeniedFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     * @throws ApiException
     * @throws Throwable
     */
    public function format($data): string
    {
        if (!is_array($data)) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace('%MODERATORS%', implode(', ', array_map(function ($moderator) {
            $name = (new UserProfileFields(
                collect(VkApi::user($this->getServiceToken()) // todo
                    ->get(RequestFields::user()->setUserId($moderator))
                    ->first()
                )
            ))->getFirstName();
            return "@id$moderator($name)";
        }, $data)), Note::get('system.access-denied'));
    }
}
