<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users;

use Carbon\Carbon;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Models\Databse\Fields\CityField;
use Hopex\VkSdk\Foundation\Core\Models\Databse\Fields\CountryField;
use Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields\CareerField;
use Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields\EducationField;
use Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields\LastSeenField;
use Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields\MilitaryField;
use Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields\RelativeField;
use Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields\SchoolField;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class UserProfileFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Users
 * @see https://dev.vk.com/method/users.get
 */
class UserProfileFields
{
    public const ID = 'id';
    public const FIRST_NAME = 'first_name';
    public const LAST_NAME = 'last_name';
    public const CAN_ACCESS_CLOSED = 'can_access_closed';
    public const IS_CLOSED = 'is_closed';

    public const ACTIVITIES = 'activities';
    public const ABOUT = 'about';
    public const BLACKLISTED = 'blacklisted';
    public const BLACKLISTED_BY_ME = 'blacklisted_by_me';
    public const BOOKS = 'books';
    public const BDATE = 'bdate';
    public const CAN_BE_INVITED_GROUP = 'can_be_invited_group';
    public const CAN_POST = 'can_post';
    public const CAN_SEE_ALL_POSTS = 'can_see_all_posts';
    public const CAN_SEE_AUDIO = 'can_see_audio';
    public const CAN_SEND_FRIEND_REQUEST = 'can_send_friend_request';
    public const CAN_WRITE_PRIVATE_MESSAGE = 'can_write_private_message';
    public const CAREER = 'career';
    public const CONTACTS = 'contacts';
    public const CITY = 'city';
    public const COUNTRY = 'country';
    public const CROP_PHOTO = 'crop_photo';
    public const DOMAIN = 'domain';
    public const EDUCATION = 'education';
    public const EXPORTS = 'exports';
    public const FOLLOWERS_COUNT = 'followers_count';
    public const FRIEND_STATUS = 'friend_status';
    public const HAS_PHOTO = 'has_photo';
    public const HAS_MOBILE = 'has_mobile';
    public const HOME_TOWN = 'home_town';
    public const PHOTO_100 = 'photo_100';
    public const PHOTO_200 = 'photo_200';
    public const PHOTO_200_ORIG = 'photo_200_orig';
    public const PHOTO_400_ORIG = 'photo_400_orig';
    public const PHOTO_50 = 'photo_50';
    public const SEX = 'sex';
    public const SITE = 'site';
    public const SCHOOLS = 'schools';
    public const SCREEN_NAME = 'screen_name';
    public const STATUS = 'status';
    public const VERIFIED = 'verified';
    public const GAMES = 'games';
    public const INTERESTS = 'interests';
    public const IS_FAVORITE = 'is_favorite';
    public const IS_FRIEND = 'is_friend';
    public const IS_HIDDEN_FROM_FEED = 'is_hidden_from_feed';
    public const LAST_SEEN = 'last_seen';
    public const MAIDEN_NAME = 'maiden_name';
    public const MILITARY = 'military';
    public const MOVIES = 'movies';
    public const MUSIC = 'music';
    public const NICKNAME = 'nickname';
    public const OCCUPATION = 'occupation';
    public const ONLINE = 'online';
    public const PERSONAL = 'personal';
    public const PHOTO_ID = 'photo_id';
    public const PHOTO_MAX = 'photo_max';
    public const PHOTO_MAX_ORIG = 'photo_max_orig';
    public const QUOTES = 'quotes';
    public const RELATION = 'relation';
    public const RELATIVES = 'relatives';
    public const TIMEZONE = 'timezone';
    public const TV = 'tv';
    public const UNIVERSITIES = 'universities';

    /**
     * @var Collection
     */
    public Collection $user;

    /**
     * UserFields constructor.
     * @param Collection $user
     */
    public function __construct(Collection $user)
    {
        $this->user = $user;
    }

    /**
     * @return Collection
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->user->get(UserProfileFields::ID);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->user->get(UserProfileFields::FIRST_NAME);
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->user->get(UserProfileFields::LAST_NAME);
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return sprintf(
            '%s %s',
            $this->user->get(UserProfileFields::FIRST_NAME),
            $this->user->get(UserProfileFields::LAST_NAME)
        );
    }

    /**
     * @return bool
     */
    public function isAccessClosed(): bool
    {
        return $this->user->get(UserProfileFields::CAN_ACCESS_CLOSED);
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->user->get(UserProfileFields::IS_CLOSED);
    }

    /**
     * @return string
     */
    public function getActivities(): string
    {
        return $this->user->get(UserProfileFields::ACTIVITIES);
    }

    /**
     * @return string
     */
    public function getAbout(): string
    {
        return $this->user->get(UserProfileFields::ABOUT);
    }

    /**
     * @return bool
     */
    public function getBlacklisted(): bool
    {
        return $this->user->get(UserProfileFields::BLACKLISTED);
    }

    /**
     * @return bool
     */
    public function getBlacklistedByMe(): bool
    {
        return $this->user->get(UserProfileFields::BLACKLISTED_BY_ME);
    }

    /**
     * @return string
     */
    public function getBooks(): string
    {
        return $this->user->get(UserProfileFields::BOOKS);
    }

    /**
     * @return Carbon
     */
    public function getBdate(): Carbon
    {
        $bdate = new Carbon();
        if ($this->user->has(UserProfileFields::BDATE)) {
            $date = explode('.', $this->user->get(UserProfileFields::BDATE));
            $bdate->setDate($date[2] ?? 1970, $date[1], $date[0]);
        }

        return $bdate;
    }

    /**
     * @return bool
     */
    public function getCanBeInvitedGroup(): bool
    {
        return $this->user->get(UserProfileFields::CAN_BE_INVITED_GROUP);
    }

    /**
     * @return bool
     */
    public function getCanPost(): bool
    {
        return $this->user->get(UserProfileFields::CAN_POST);
    }

    /**
     * @return bool
     */
    public function getCanSeeAllPosts(): bool
    {
        return $this->user->get(UserProfileFields::CAN_SEE_ALL_POSTS);
    }

    /**
     * @return bool
     */
    public function getCanSeeAudio(): bool
    {
        return $this->user->get(UserProfileFields::CAN_SEE_AUDIO);
    }

    /**
     * @return bool
     */
    public function getCanSendFriendRequest(): bool
    {
        return $this->user->get(UserProfileFields::CAN_SEND_FRIEND_REQUEST);
    }

    /**
     * @return bool
     */
    public function getCanWritePrivateMessage(): bool
    {
        return $this->user->get(UserProfileFields::CAN_WRITE_PRIVATE_MESSAGE);
    }

    /**
     * @return Collection
     */
    public function getCareer(): Collection
    {
        return collect($this->user->get(UserProfileFields::CAREER))
            ->map(function ($item) {
                return new CareerField($item);
            });
    }

    /**
     * @param string|null $token
     * @return CityField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCity(string $token = null): CityField
    {
        return new CityField($this->user->get(UserProfileFields::CITY), $token);
    }

    /**
     * @param string|null $token
     * @return CountryField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountry(string $token = null): CountryField
    {
        return new CountryField($this->user->get(UserProfileFields::COUNTRY), $token);
    }

    /**
     * @return Collection
     */
    public function getCropPhoto(): Collection
    {
        return $this->user->get(UserProfileFields::CROP_PHOTO);
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->user->get(UserProfileFields::DOMAIN);
    }

    /**
     * @return EducationField
     */
    public function getEducation(): EducationField
    {
        return new EducationField($this->user);
    }

    /**
     * @return mixed
     */
    public function getExports(): mixed
    {
        return $this->user->get(UserProfileFields::EXPORTS);
    }

    /**
     * @return int
     */
    public function getFollowersCount(): int
    {
        return $this->user->get(UserProfileFields::FOLLOWERS_COUNT);
    }

    /**
     * @return bool
     */
    public function getFriendStatus(): bool
    {
        return $this->user->get(UserProfileFields::FRIEND_STATUS);
    }

    /**
     * @return bool
     */
    public function getHasPhoto(): bool
    {
        return $this->user->get(UserProfileFields::HAS_PHOTO);
    }

    /**
     * @return bool
     */
    public function getHasMobile(): bool
    {
        return $this->user->get(UserProfileFields::HAS_MOBILE);
    }

    /**
     * @return string
     */
    public function getHomeTown(): string
    {
        return $this->user->get(UserProfileFields::HOME_TOWN);
    }

    /**
     * @return string
     */
    public function getPhoto100(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_100);
    }

    /**
     * @return string
     */
    public function getPhoto200(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_200);
    }

    /**
     * @return string
     */
    public function getPhoto200Orig(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_200_ORIG);
    }

    /**
     * @return string
     */
    public function getPhoto400Orig(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_400_ORIG);
    }

    /**
     * @return string
     */
    public function getPhoto50(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_50);
    }

    /**
     * @return int
     */
    public function getSex(): int
    {
        return $this->user->get(UserProfileFields::SEX);
    }

    /**
     * @return string
     */
    public function getSite(): string
    {
        return $this->user->get(UserProfileFields::SITE);
    }

    /**
     * @return Collection
     */
    public function getSchools(): Collection
    {
        return collect($this->user->get(UserProfileFields::SCHOOLS))
            ->map(function ($item) {
                return new SchoolField($item);
            });
    }

    /**
     * @return string
     */
    public function getScreenName(): string
    {
        return $this->user->get(UserProfileFields::SCREEN_NAME);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->user->get(UserProfileFields::STATUS);
    }

    /**
     * @return bool
     */
    public function getVerified(): bool
    {
        return $this->user->get(UserProfileFields::VERIFIED);
    }

    /**
     * @return string
     */
    public function getGames(): string
    {
        return $this->user->get(UserProfileFields::GAMES);
    }

    /**
     * @return string
     */
    public function getInterests(): string
    {
        return $this->user->get(UserProfileFields::INTERESTS);
    }

    /**
     * @return bool
     */
    public function getIsFavorite(): bool
    {
        return $this->user->get(UserProfileFields::IS_FAVORITE);
    }

    /**
     * @return bool
     */
    public function getIsFriend(): bool
    {
        return $this->user->get(UserProfileFields::IS_FRIEND);
    }

    /**
     * @return bool
     */
    public function getIsHiddenFromFeed(): bool
    {
        return $this->user->get(UserProfileFields::IS_HIDDEN_FROM_FEED);
    }

    /**
     * @return LastSeenField
     */
    public function getLastSeen(): LastSeenField
    {
        return new LastSeenField($this->user->get(UserProfileFields::LAST_SEEN));
    }

    /**
     * @return string
     */
    public function getMaidenName(): string
    {
        return $this->user->get(UserProfileFields::MAIDEN_NAME);
    }

    /**
     * @return Collection
     */
    public function getMilitary(): Collection
    {
        return collect($this->user->get(UserProfileFields::MILITARY))
            ->map(function ($item) {
                return new MilitaryField($item);
            });
    }

    /**
     * @return string
     */
    public function getMovies(): string
    {
        return $this->user->get(UserProfileFields::MOVIES);
    }

    /**
     * @return string
     */
    public function getMusic(): string
    {
        return $this->user->get(UserProfileFields::MUSIC);
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->user->get(UserProfileFields::NICKNAME);
    }

    /**
     * @return Collection
     */
    public function getOccupation(): Collection
    {
        return $this->user->get(UserProfileFields::OCCUPATION);
    }

    /**
     * @return bool
     */
    public function getOnline(): bool
    {
        return $this->user->get(UserProfileFields::ONLINE);
    }

    /**
     * @return Collection
     */
    public function getPersonal(): Collection
    {
        return $this->user->get(UserProfileFields::PERSONAL);
    }

    /**
     * @return string
     */
    public function getPhotoId(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_ID);
    }

    /**
     * @return string
     */
    public function getPhotoMax(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_MAX);
    }

    /**
     * @return string
     */
    public function getPhotoMaxOrig(): string
    {
        return $this->user->get(UserProfileFields::PHOTO_MAX_ORIG);
    }

    /**
     * @return string
     */
    public function getQuotes(): string
    {
        return $this->user->get(UserProfileFields::QUOTES);
    }

    /**
     * @return int
     */
    public function getRelation(): int
    {
        return $this->user->get(UserProfileFields::RELATION);
    }

    /**
     * @return Collection
     */
    public function getRelatives(): Collection
    {
        return  collect($this->user->get(UserProfileFields::RELATIVES))
            ->map(function ($item) {
                return new RelativeField($item);
            });
    }

    /**
     * @return mixed
     */
    public function getTimezone(): mixed
    {
        return $this->user->get(UserProfileFields::TIMEZONE);
    }

    /**
     * @return string
     */
    public function getTv(): string
    {
        return $this->user->get(UserProfileFields::TV);
    }

    /**
     * @return Collection
     */
    public function getUniversities(): Collection
    {
        return $this->user->get(UserProfileFields::UNIVERSITIES);
    }
}
