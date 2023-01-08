<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserProfileFields;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserRequestFields;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class RelativeField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields
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
                    $this->getRelativeId()
                ])
                ->setProfileFields($userProfileFields)
            )->first()));
    }

    /**
     * @return int
     */
    public function getRelativeId(): int
    {
        return $this->relative->get(self::ID);
    }

    /**
     * @return string
     */
    public function getTranslationType(): string
    {
        return preg_replace('~vk-sdk\.~', '', __('vk-sdk.' . $this->getType()));
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->relative->get(self::TYPE);
    }
}
