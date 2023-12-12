<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\Entity;

/**
 * The number of different objects of the user. The field only returns in method
 * {@see https://dev.vk.com/en/users.get users.get} when requesting information about one user.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#counters
 *
 * @property-read int $subscriptions
 * @property-read int $pages
 * @property-read int $followers
 * @property-read int $userPhotos
 * @property-read int $userVideos
 * @property-read int $mutualFriends
 * @property-read int $onlineFriends
 * @property-read int $groups
 * @property-read int $gifts
 * @property-read int $friends
 * @property-read int $notes
 * @property-read int $photos
 * @property-read int $audios
 * @property-read int $videos
 * @property-read int $albums
 */
class Counters extends Entity
{
    /**
     * The number of photo albums.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function albums(): int
    {
        return $this->albums ?? 0;
    }

    /**
     * The number of videos.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function videos(): int
    {
        return $this->videos ?? 0;
    }

    /**
     * The number of audio recordings.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function audios(): int
    {
        return $this->audios ?? 0;
    }

    /**
     * The number of photographs.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function photos(): int
    {
        return $this->photos ?? 0;
    }

    /**
     * The number of notes.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function notes(): int
    {
        return $this->notes ?? 0;
    }

    /**
     * The number of friends.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function friends(): int
    {
        return $this->friends ?? 0;
    }

    /**
     * The number of user gifts.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function gifts(): int
    {
        return $this->gifts ?? 0;
    }

    /**
     * The number of communities.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function groups(): int
    {
        return $this->groups ?? 0;
    }

    /**
     * The number of online friends.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function onlineFriends(): int
    {
        return $this->onlineFriends ?? 0;
    }

    /**
     * The number of common friends.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function mutualFriends(): int
    {
        return $this->mutualFriends ?? 0;
    }

    /**
     * The number of videos with the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function userVideos(): int
    {
        return $this->userVideos ?? 0;
    }

    /**
     * The number of photos with the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function userPhotos(): int
    {
        return $this->userPhotos ?? 0;
    }

    /**
     * The number of subscribers.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function followers(): int
    {
        return $this->followers ?? 0;
    }

    /**
     * The number of objects in the block "Interesting pages".
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function pages(): int
    {
        return $this->pages ?? 0;
    }

    /**
     * The number of subscriptions of the user (to whom the user is subscribed).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return int
     */
    public function subscriptions(): int
    {
        return $this->subscriptions ?? 0;
    }
}
