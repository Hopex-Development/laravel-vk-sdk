<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Models\Users\UserProfileFields;
use Hopex\VkSdk\Foundation\Core\Models\Users\UserRequestFields;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class RelativeField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class RelativeField
{
    private const ID = 'id';
    private const TYPE = 'type';

    /**
     * @var Collection
     */
    public Collection $relative;

    /**
     * RelativeField constructor.
     * @param array|Collection $relative
     */
    public function __construct(array|Collection $relative)
    {
        if ($relative instanceof Collection) {
            $this->relative = $relative;
        } else {
            $this->relative = collect($relative);
        }
    }

    /**
     * @param string $token
     * @param array $userProfileFields
     * @return UserProfileFields
     * @throws ApiException
     * @throws Throwable
     */
    public function getRelative(string $token, array $userProfileFields = []): UserProfileFields
    {
        return new UserProfileFields(collect(VkApi::user($token)
            ->get((new UserRequestFields())
                ->setUserIds([
                    $this->relative->get(self::ID)
                ])
                ->setProfileFields($userProfileFields)
            )->first()));
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return preg_replace('~vk-sdk\.~', '', __('vk-sdk.' . $this->relative->get(self::TYPE)));
    }
}
