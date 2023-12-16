<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\SimpleRequestBuilder;

/**
 * The information fields of the user's page that need to be received in the response.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user
 */
class UsersFields extends SimpleRequestBuilder
{
    /**
     * See description for {@see User::activities()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#activities
     *
     * @return $this
     */
    public function activities(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::about()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function about(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::isBlacklisted()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function blacklisted(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::isBlacklistedByMe()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function blacklistedByMe(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::books()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function books(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::birthday()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function bdate(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * Can be invited to a group.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function canBeInvitedGroup(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::canPost()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function canPost(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::canSeeAllPosts()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function canSeeAllPosts(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::canSeeAudio()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function canSeeAudio(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::canWritePrivateMessage()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function canSendFriendRequest(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::canWritePrivateMessage()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function canWritePrivateMessage(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::career()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function career(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::commonCount()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function commonCount(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::connections()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function connections(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::contacts()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function contacts(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::city()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function city(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::counters()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function counters(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::country()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function country(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::croppedPhoto()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function cropPhoto(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::domain()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function domain(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::education()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function education(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::exports()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function exports(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::followersCount()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function followersCount(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::friendStatus()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function friendStatus(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::hasPhoto()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function hasPhoto(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::hasMobile()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function hasMobile(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::homeTown()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function homeTown(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photo100()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photo100(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photo200()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photo200(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photo200Orig()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photo200Orig(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photo400Orig()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photo400Orig(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photo50()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photo50(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::sex()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function sex(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::site()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function site(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::schools()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function schools(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::screenName()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function screenName(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::status()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function status(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::verified()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function verified(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::games()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function games(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::interests()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function interests(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::isFavorite()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function isFavorite(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::isFriend()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function isFriend(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::isHiddenFromFeed()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function isHiddenFromFeed(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::lastSeen()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function lastSeen(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::maidenName()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function maidenName(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::military()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function military(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::movies()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function movies(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::music()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function music(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::nickname()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function nickname(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::occupation()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function occupation(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::online()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function online(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::personal()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function personal(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photoId()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photoId(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photoMax()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photoMax(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::photoMaxOrig()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function photoMaxOrig(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::quotes()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function quotes(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::relation()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function relation(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::relatives()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function relatives(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::timezone()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function timezone(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::tv()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function tv(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * See description for {@see User::universities()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user
     *
     * @return $this
     */
    public function universities(): static
    {
        return $this->addField(__FUNCTION__);
    }
}
