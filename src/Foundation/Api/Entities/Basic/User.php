<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Basic;

use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Career;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\City;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Contacts;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Counters;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Country;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\CroppedPhoto;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Education;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\LastSeen;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Military;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Occupation;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Personal;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\Relative;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\School;
use Hopex\VkSdk\Foundation\Api\Entities\Advanced\University;
use Hopex\VkSdk\Foundation\Api\Entities\Attachments\Audio;
use Hopex\VkSdk\Foundation\Api\Entities\Entity;
use Illuminate\Support\Collection;

/**
 * The object contains information about the VK user. The set of fields can change depending on the method
 * called and the parameters transmitted in it.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Basic
 * @link    https://dev.vk.com/en/reference/objects/user
 *
 * @property-read  int    $id
 * @property-read  string $firstName
 * @property-read string  $lastName
 * @property-read string  $deactivated
 * @property-read bool    $isClosed
 * @property-read bool    $canAccessClosed
 * @property-read string  $about
 * @property-read string  $activities
 * @property-read string  $bdate
 * @property-read int     $blacklisted
 * @property-read int     $blacklistedByMe
 * @property-read string  $books
 * @property-read int     $canPost
 * @property-read string  $wallDefault
 * @property-read string  $trackCode
 * @property-read int     $verified
 * @property-read array   $universities
 * @property-read string  $tv
 * @property-read int     $trending
 * @property-read int     $timezone
 * @property-read string  $status
 * @property-read string  $site
 * @property-read int     $sex
 * @property-read string  $screenName
 * @property-read array   $schools
 * @property-read int     $relation
 * @property-read array   $relatives
 * @property-read string  $quotes
 * @property-read string  $photoMaxOrig
 * @property-read string  $photoMax
 * @property-read string  $photoId
 * @property-read string  $photo400Orig
 * @property-read string  $photo200
 * @property-read string  $photo200Orig
 * @property-read string  $photo100
 * @property-read string  $photo50
 * @property-read array   $personal
 * @property-read int     $online
 * @property-read array   $occupation
 * @property-read string  $nickname
 * @property-read string  $music
 * @property-read string  $movies
 * @property-read array   $military
 * @property-read string  $maidenName
 * @property-read string  $lists
 * @property-read array   $lastSeen
 * @property-read string  $lastNameCase
 * @property-read int     $isNoIndex
 * @property-read int     $isHiddenFromFeed
 * @property-read int     $isFriend
 * @property-read int     $isFavorite
 * @property-read string  $interests
 * @property-read string  $homeTown
 * @property-read int     $hasPhoto
 * @property-read int     $hasMobile
 * @property-read string  $games
 * @property-read int     $friendStatus
 * @property-read int     $followersCount
 * @property-read mixed   $exports
 * @property-read string  $domain
 * @property-read mixed   $cropPhoto
 * @property-read array   $country
 * @property-read array   $counters
 * @property-read mixed   $connections
 * @property-read int     $commonCount
 * @property-read object  $city
 * @property-read array   $career
 * @property-read int     $canWritePrivateMessage
 * @property-read int     $canSendFriendRequest
 * @property-read int     $canSeeAllPosts
 * @property-read int     $canSeeAudio
 * @property-read int     $onlineMobile
 * @property-read int     $onlineApp
 * @property-read string  $mobilePhone
 * @property-read string  $homePhone
 * @property-read string  $skype
 * @property-read array   $statusAudio
 * @property-read int     $graduation
 * @property-read string  $facultyName
 * @property-read int     $faculty
 * @property-read string  $universityName
 * @property-read int     $university
 * @property-read string  $firstNameNom
 * @property-read string  $firstNameGen
 * @property-read string  $firstNameDat
 * @property-read string  $firstNameAcc
 * @property-read string  $firstNameIns
 * @property-read string  $firstNameAbl
 * @property-read string  $lastNameNom
 * @property-read string  $lastNameGen
 * @property-read string  $lastNameDat
 * @property-read string  $lastNameAcc
 * @property-read string  $lastNameIns
 * @property-read string  $lastNameAbl
 */
class User extends Entity
{
    /**
     * User ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#id
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * Name.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name
     *
     * @return string
     */
    public function firstName(): string
    {
        return $this->firstName ?? '';
    }

    /**
     * Surname of user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name
     *
     * @return string
     */
    public function lastName(): string
    {
        return $this->lastName ?? '';
    }

    /**
     * The field is returned if the user’s page is deleted or blocked, contains a value `deleted` or `banned`. In this
     * case, the optional fields are not returned.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#deactivated
     *
     * @return string
     */
    public function deactivated(): string
    {
        return $this->deactivated ?? '';
    }

    /**
     * Full name.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @return string
     * @example John Doe
     *
     */
    public function fullName(): string
    {
        return implode(' ', [
            $this->firstName(),
            $this->lastName(),
        ]);
    }

    /**
     * Whether the user profile is hidden by privacy settings.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#is_closed
     *
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->isClosed ?? false;
    }

    /**
     * Can the current user see the profile `isClosed` = `true` (They are friends).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#can_access_closed
     *
     * @return bool
     */
    public function canAccessClosed(): bool
    {
        return $this->canAccessClosed ?? false;
    }

    /**
     * The content of the field "About yourself" from the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#about
     *
     * @return string
     */
    public function about(): string
    {
        return $this->about ?? '';
    }

    /**
     * Content of the Activity field from the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#activities
     *
     * @return string
     */
    public function activities(): string
    {
        return $this->activities ?? '';
    }

    /**
     * Date of birth. Returns in D.M.YYYY or D.M format (if birth year is hidden). If the date of birth is hidden in
     * its entirety, the field is missing from the answer.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#bdate
     *
     * @return string
     */
    public function birthday(): string
    {
        return $this->bdate ?? '';
    }

    /**
     * Information about whether the current user is blacklisted.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#blacklisted
     *
     * @return bool
     */
    public function isBlacklisted(): bool
    {
        return (bool)($this->blacklisted ?? false);
    }

    /**
     * Information about whether the user is blacklisted from the current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#blacklisted_by_me
     *
     * @return bool
     */
    public function isBlacklistedByMe(): bool
    {
        return (bool)($this->blacklistedByMe ?? false);
    }

    /**
     * The content of the “Favorite Books” field from the user profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#books
     *
     * @return string
     */
    public function books(): string
    {
        return $this->books ?? '';
    }

    /**
     * Information about whether the current user can leave records on the wall.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#can_post
     *
     * @return bool
     */
    public function canPost(): bool
    {
        return $this->canPost ?? false;
    }

    /**
     * Information about whether the current user can see someone else's records on the wall.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#can_see_all_posts
     *
     * @return bool
     */
    public function canSeeAllPosts(): bool
    {
        return $this->canSeeAllPosts ?? false;
    }

    /**
     * Information about whether the current user can see the audio recordings.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#can_see_audio
     *
     * @return bool
     */
    public function canSeeAudio(): bool
    {
        return $this->canSeeAudio ?? false;
    }

    /**
     * Information about whether a notification will be sent to the user about the friend request from the current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#can_send_friend_request
     *
     * @return bool
     */
    public function canSendFriendRequest(): bool
    {
        return (bool)($this->canSendFriendRequest ?? false);
    }

    /**
     * Information about whether the current user can send a private message.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#can_write_private_message
     *
     * @return bool
     */
    public function canWritePrivateMessage(): bool
    {
        return (bool)($this->canWritePrivateMessage ?? false);
    }

    /**
     * Information about the user’s career.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return Career[]|Collection
     */
    public function career(): Collection|array
    {
        return collect(array_map(fn($career) => new Career($career), $this->career ?? []));
    }

    /**
     * Information about the city indicated on the user's page in the section "Contacts".
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#city
     *
     * @return City
     */
    public function city(): City
    {
        return new City((array)($this->city ?? []));
    }

    /**
     * Common friends with current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#common_count
     *
     * @return int
     */
    public function commonCount(): int
    {
        return $this->commonCount ?? 0;
    }

    /**
     * Returns data about the services specified in the user profile, such as: Skype, LiveJournal. For each service, a
     * separate field with a string type containing the username of the user is returned.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#connections
     * @see     User::connections()
     *
     * @return string
     */
    public function connections(): string
    {
        return $this->skype ?? '';
    }

    /**
     * The indicated Skype login in the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#connections
     *
     * @return string
     */
    public function skype(): string
    {
        return $this->connections();
    }

    /**
     * Information about the user's phone numbers. If the data is specified and not hidden by the privacy settings.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#contacts
     *
     * @return Contacts
     */
    public function contacts(): Contacts
    {
        return new Contacts([
            $this->mobilePhone,
            $this->homePhone,
            $this->site,
        ]);
    }

    /**
     * The address of the site indicated in the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#site
     *
     * @return string
     */
    public function site(): string
    {
        return $this->contacts()->site();
    }

    /**
     * The number of different objects of the user. The field only returns in method `users.get` when requesting
     * information about one user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#counters
     *
     * @return Counters
     */
    public function counters(): Counters
    {
        return new Counters($this->counters ?? []);
    }

    /**
     * Information about the country indicated on the user's page in the section "Contacts".
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#country
     *
     * @return Country
     */
    public function country(): Country
    {
        return new Country((array)($this->country ?? []));
    }

    /**
     * Returns data on the points at which profile and miniature photos of the user are cut, if available.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return CroppedPhoto
     */
    public function croppedPhoto(): CroppedPhoto
    {
        return new CroppedPhoto($this->cropPhoto ?? []);
    }

    /**
     * Short address of the page. A line containing a short page address is returned (e.g., `andrew`). If he is not
     * appointed, he shall return `id` + `userId`, for example, `id35828305`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#domain
     *
     * @return string
     */
    public function domain(): string
    {
        return $this->domain ?? '';
    }

    /**
     * Information about the higher educational institution of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return Education
     */
    public function education(): Education
    {
        return new Education([
            $this->graduation,
            $this->facultyName,
            $this->faculty,
            $this->universityName,
            $this->university,
        ]);
    }

    /**
     * External services to which exports from VK are configured (`livejournal`).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#exports
     *
     * @return mixed
     */
    public function exports(): mixed
    {
        return $this->exports;
    }

    /**
     * Name in Namely case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::firstName()}
     */
    public function firstNameNamelyCase(): string
    {
        return $this->firstNameNom ?? '';
    }

    /**
     * Name in Parent case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::firstName()}
     */
    public function firstNameParentCase(): string
    {
        return $this->firstNameGen ?? '';
    }

    /**
     * Name in Dative case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::firstName()}
     */
    public function firstNameDativeCase(): string
    {
        return $this->firstNameDat ?? '';
    }

    /**
     * Name in Vindictive case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::firstName()}
     */
    public function firstNameVindictiveCase(): string
    {
        return $this->firstNameAcc ?? '';
    }

    /**
     * Name in Creatively case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::firstName()}
     */
    public function firstNameCreativelyCase(): string
    {
        return $this->firstNameIns ?? '';
    }

    /**
     * Name in Offered case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#first_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::firstName()}
     */
    public function firstNameOfferedCase(): string
    {
        return $this->firstNameAbl ?? '';
    }

    /**
     * Number of subscribers of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#followers_count
     *
     * @return int
     */
    public function followersCount(): int
    {
        return $this->followersCount ?? 0;
    }

    /**
     * Friendship status with the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#friend_status
     *
     * @return string
     */
    public function friendStatus(): string
    {
        return match ($this->friendStatus ?? -1) {
            0 => 'Is not a friend',
            1 => 'Sent an application/subscription to the user',
            2 => 'There is an incoming application/subscription from the user',
            3 => 'Is a friend',
            default => 'Unknown',
        };
    }

    /**
     * Content of the “Favorite Games” field from the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#games
     *
     * @return string
     */
    public function games(): string
    {
        return $this->games ?? '';
    }

    /**
     * Information about whether the user's mobile phone number is known. Return values: `true` — known, `false` —
     * unknown.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#has_mobile
     *
     * @return bool
     */
    public function hasMobile(): bool
    {
        return (bool)($this->hasMobile ?? false);
    }

    /**
     * Information about whether the user has set a profile photo. Return values: `true` established, `false` - didn't.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#has_photo
     *
     * @return bool
     */
    public function hasPhoto(): bool
    {
        return (bool)($this->hasPhoto ?? false);
    }

    /**
     * Name of hometown.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#home_town
     *
     * @return string
     */
    public function homeTown(): string
    {
        return $this->homeTown ?? '';
    }

    /**
     * Content of the “Interest” field from the profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#interests
     *
     * @return string
     */
    public function interests(): string
    {
        return $this->interests ?? '';
    }

    /**
     * Information about whether the user is bookmarked by the current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#is_favorite
     *
     * @return bool
     */
    public function isFavorite(): bool
    {
        return (bool)($this->isFavorite ?? false);
    }

    /**
     * Information about whether the user is a friend of the current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#is_friend
     *
     * @return bool
     */
    public function isFriend(): bool
    {
        return (bool)($this->isFriend ?? false);
    }

    /**
     * Information about whether the user is hidden from the news feed of the current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#is_hidden_from_feed
     *
     * @return bool
     */
    public function isHiddenFromFeed(): bool
    {
        return (bool)($this->isHiddenFromFeed ?? false);
    }

    /**
     * Is the profile indexed by search sites.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#is_no_index
     *
     * @return bool
     */
    public function isNoIndex(): bool
    {
        return (bool)($this->isNoIndex ?? false);
    }

    /**
     * Last name in Namely case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::lastName()}
     */
    public function lastNameNamelyCase(): string
    {
        return $this->lastNameNom ?? '';
    }

    /**
     * Last name in Parent case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::lastName()}
     */
    public function lastNameParentCase(): string
    {
        return $this->lastNameGen ?? '';
    }

    /**
     * Last name in Dative case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::lastName()}
     */
    public function lastNameDativeCase(): string
    {
        return $this->lastNameDat ?? '';
    }

    /**
     * Last name in Vindictive case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::lastName()}
     */
    public function lastNameVindictiveCase(): string
    {
        return $this->lastNameAcc ?? '';
    }

    /**
     * Last name in Creatively case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::lastName()}
     */
    public function lastNameCreativelyCase(): string
    {
        return $this->lastNameIns ?? '';
    }

    /**
     * Last name in Offered case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_name_%7Bcase%7D
     *
     * @return string
     * @deprecated Use the method {@see User::lastName()}
     */
    public function lastNameOfferedCase(): string
    {
        return $this->lastNameAbl ?? '';
    }

    /**
     * Time of last visit.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_seen
     *
     * @return LastSeen
     */
    public function lastSeen(): LastSeen
    {
        return new LastSeen($this->lastSeen ?? []);
    }

    /**
     * The array of identifiers of the user's friend lists. The field is only available for the method
     * {@see friends.get}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#lists
     *
     * @return array
     */
    public function lists(): array
    {
        return explode(',', $this->lists ?? []);
    }

    /**
     * My maiden name.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#maiden_name
     *
     * @return string
     */
    public function maidenName(): string
    {
        return $this->maidenName ?? '';
    }

    /**
     * Information about the military service of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#military
     *
     * @return Military[]|Collection
     */
    public function military(): Collection|array
    {
        return collect(array_map(fn($military) => new Military($military), $this->military ?? []));
    }

    /**
     * The content of the “Favorite Movies” field from the user profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#movies
     *
     * @return string
     */
    public function movies(): string
    {
        return $this->movies ?? '';
    }

    /**
     * The content of the field “Favorite music” from the user profile.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#music
     *
     * @return string
     */
    public function music(): string
    {
        return $this->music ?? '';
    }

    /**
     * Nickname of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#nickname
     *
     * @return string
     */
    public function nickname(): string
    {
        return $this->nickname ?? '';
    }

    /**
     * Information about the current type of user activity.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#occupation
     *
     * @return Occupation
     */
    public function occupation(): Occupation
    {
        return new Occupation($this->occupation ?? []);
    }

    /**
     * Information about whether the user is currently on the site from any device.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#online
     *
     * @see     User::onlineByMobile()
     * @see     User::onlineByApplication()
     * @see     User::onlineApplicationId()
     *
     * @return bool
     */
    public function online(): bool
    {
        return !compare(
            0,
            $this->online ?? 0,
            $this->onlineMobile ?? 0,
            $this->onlineApp ?? 0
        );
    }

    /**
     * If the user is online from a mobile device, it returns `true` and the application ID in the
     * {@see User::onlineApplicationId()} field.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#online
     *
     * @return bool
     */
    public function onlineByMobile(): bool
    {
        return (bool)($this->onlineMobile ?? false);
    }

    /**
     * If the user is online from a desktop application, it returns true and the application ID in the
     * {@see User::onlineApplicationId()} field.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#online
     *
     * @return bool
     */
    public function onlineByApplication(): bool
    {
        return (bool)$this->onlineApplicationId();
    }

    /**
     * See description for {@see User::online()}
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#online
     *
     * @return int
     */
    public function onlineApplicationId(): int
    {
        return $this->onlineApp ?? 0;
    }

    /**
     * Information about fields from the section "Life position".
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return Personal
     */
    public function personal(): Personal
    {
        return new Personal($this->personal ?? []);
    }

    /**
     * URL square Photos of a user with a width of `50` pixels. If the user does not have a photo, it will be returned
     * {@see https://vk.com/images/camera_50.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_50
     *
     * @return string
     */
    public function photo50(): string
    {
        return $this->photo50 ?? '';
    }

    /**
     * URL square Photos of a user with a width of `100` pixels. If the user does not have a photo, it will be returned
     * {@see https://vk.com/images/camera_100.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_100
     *
     * @return string
     */
    public function photo100(): string
    {
        return $this->photo100 ?? '';
    }

    /**
     * URL of the user’s photo with a width of `200` pixels. If the user does not have a photo, it will be returned
     * {@see https://vk.com/images/camera_200.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_200_orig
     *
     * @return string
     */
    public function photo200Orig(): string
    {
        return $this->photo200Orig ?? '';
    }

    /**
     * URL square A photo with a width of `200` pixels. If the user does not have a photo of this size, the response
     * will return {@see https://vk.com/images/camera_200.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_200
     *
     * @return string
     */
    public function photo200(): string
    {
        return $this->photo200 ?? '';
    }

    /**
     * URL of a photo with a width of `400` pixels. If the user does not have a photo of this size, the response will
     * return {@see https://vk.com/images/camera_400.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_400_orig
     *
     * @return string
     */
    public function photo400Orig(): string
    {
        return $this->photo400Orig ?? '';
    }

    /**
     * The string identifier of the main user profile photo in the format `{userId}_{photoId}`, for example,
     * `6492_192164258`.
     * <br><br>
     *
     * Note that this field may not be in the answer.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_id
     *
     * @return string
     */
    public function photoId(): string
    {
        return $this->photoId ?? '';
    }

    /**
     * URL square Photos with maximum width. A photo that is both `200` and `100` pixels wide can be returned. If the
     * user does not have a photo, it will be returned {@see https://vk.com/images/camera_200.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_max
     *
     * @return string
     */
    public function photoMax(): string
    {
        return $this->photoMax ?? '';
    }

    /**
     * URL photos of maximum size. A photo that is both `400` and `200` pixels wide can be returned. If the user does
     * not have a photo, it will be returned {@see https://vk.com/images/camera_400.png}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#photo_max_orig
     *
     * @return string
     */
    public function photoMaxOriginal(): string
    {
        return $this->photoMaxOrig ?? '';
    }

    /**
     * Favorite quotes.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#quotes
     *
     * @return string
     */
    public function quotes(): string
    {
        return $this->quotes ?? '';
    }

    /**
     * List of relatives.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#relatives
     *
     * @return Relative[]|Collection
     */
    public function relatives(): Collection|array
    {
        return collect(array_map(fn($relative) => new Relative($relative), $this->relatives ?? []));
    }

    /**
     * Family status. If another user is specified in the marital status, the object is additionally returned
     * relation_partner containing the id and name of that person.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#relation
     *
     * @return string
     */
    public function relation(): string
    {
        return match ($this->relation ?? -1) {
            1 => 'Unmarried or unmarried',
            2 => 'Have a friend/have a girlfriend',
            3 => 'Engaged/engaged',
            4 => 'Married/married',
            5 => "It's complicated.",
            6 => 'In active search',
            7 => 'In love/in love',
            8 => 'In civil marriage',
            0 => 'Not specified',
            default => 'Unknown'
        };
    }

    /**
     * List of schools in which the user studied. An array of objects describing schools.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return School[]|Collection
     */
    public function schools(): Collection|array
    {
        return collect(array_map(fn($school) => new School($school), $this->schools ?? []));
    }

    /**
     * The short name of the page.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#screen_name
     *
     * @return string
     */
    public function screenName(): string
    {
        return $this->screenName ?? '';
    }

    /**
     * Paul.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#sex
     *
     * @return string
     */
    public function sex(): string
    {
        return match ($this->sex ?? -1) {
            0 => 'Not specified',
            1 => 'Female',
            2 => 'The male',
            default => 'Unknown'
        };
    }

    /**
     * Status of user. The line containing the status text located in the profile under the name is returned. If the
     * option “Translate to status playing music” is enabled, an additional field is returned
     * {@see User::statusAudio()} containing information about the composition.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#status
     *
     * @return string
     */
    public function status(): string
    {
        return $this->status ?? '';
    }

    /**
     * The object describing the audio recording.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio
     *
     * @return Audio
     */
    public function statusAudio(): Audio
    {
        return new Audio($this->statusAudio ?? []);
    }

    /**
     * Time zone. Only when requesting information about the current user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#timezone
     *
     * @return int
     */
    public function timezone(): int
    {
        return $this->timezone ?? 0;
    }

    /**
     * Information about whether the user's page has a "light".
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#trending
     *
     * @return bool
     */
    public function trending(): bool
    {
        return (bool)($this->trending ?? false);
    }

    /**
     * Favorite TV show.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#tv
     *
     * @return string
     */
    public function tv(): string
    {
        return $this->tv ?? '';
    }

    /**
     * List of universities in which the user studied. An array of objects describing universities.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return University[]|Collection
     */
    public function universities(): Collection|array
    {
        return collect(array_map(fn($university) => new University($university), $this->universities ?? []));
    }

    /**
     * It's coming back `true` if the user page is verified, `false` - if not.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#verified
     *
     * @return bool
     */
    public function verified(): bool
    {
        return (bool)($this->verified ?? false);
    }

    /**
     * The default wall mode. Possible values: `owner`, `all`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#wall_default
     *
     * @return string
     */
    public function wallDefault(): string
    {
        return $this->wallDefault ?? '';
    }

    /**
     * Tony Stark was able to bring back half the population of the universe, but he couldn't bring back the
     * description that was once here.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string
     */
    public function trackCode(): string
    {
        return $this->trackCode ?? '';
    }
}
