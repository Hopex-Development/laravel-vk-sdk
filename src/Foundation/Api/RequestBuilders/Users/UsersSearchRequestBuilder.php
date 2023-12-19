<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\SearchFromList;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\SearchHasPhoto;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\SearchOnline;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\SearchSex;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\SearchSorting;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\SearchStatus;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasBounds;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUsersFields;

/**
 * Returns a list of users according to a given search criterion.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
class UsersSearchRequestBuilder extends AbstractRequestBuilder
{
    use HasBounds;
    use HasUsersFields;

    /**
     * {@inheritdoc}
     */
    protected string $method = 'users.search';

    /**
     * Search string.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param string $searchSubstring
     *
     * @return static
     */
    public function q(string $searchSubstring): static
    {
        return $this->addField([
            __FUNCTION__ => $searchSubstring,
        ]);
    }

    /**
     * Sort order.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param SearchSorting $searchSorting
     *
     * @return static
     */
    public function sort(SearchSorting $searchSorting): static
    {
        return $this->addField([
            __FUNCTION__ => $searchSorting->value,
        ]);
    }

    /**
     * Sort order by date of registration.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function sortDate(): static
    {
        return $this->sort(SearchSorting::DATE);
    }

    /**
     * Sort order by popularity.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function sortPopularity(): static
    {
        return $this->sort(SearchSorting::POPULARITY);
    }

    /**
     * City ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $cityId
     *
     * @return static
     */
    public function city(int $cityId): static
    {
        return $this->addField([
            __FUNCTION__ => $cityId,
        ]);
    }

    /**
     * City ID for backward compatibility. Use the city
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $cityId
     *
     * @return static
     */
    public function cityId(int $cityId): static
    {
        return $this->addField([
            __FUNCTION__ => $cityId,
        ]);
    }

    /**
     * Country ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $countryId
     *
     * @return static
     */
    public function country(int $countryId): static
    {
        return $this->addField([
            __FUNCTION__ => $countryId,
        ]);
    }

    /**
     * Country ID for backward compatibility. Use the country
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $countryId
     *
     * @return static
     */
    public function countryId(int $countryId): static
    {
        return $this->addField([
            __FUNCTION__ => $countryId,
        ]);
    }

    /**
     * Name of the city line.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param string $hometown
     *
     * @return static
     */
    public function hometown(string $hometown): static
    {
        return $this->addField([
            __FUNCTION__ => $hometown,
        ]);
    }

    /**
     * University country ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $universityCountry
     *
     * @return static
     */
    public function universityCountry(int $universityCountry): static
    {
        return $this->addField([
            __FUNCTION__ => $universityCountry,
        ]);
    }

    /**
     * University ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $universityId
     *
     * @return static
     */
    public function university(int $universityId): static
    {
        return $this->addField([
            __FUNCTION__ => $universityId,
        ]);
    }

    /**
     * Year of graduation.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $universityYear
     *
     * @return static
     */
    public function universityYear(int $universityYear): static
    {
        return $this->addField([
            __FUNCTION__ => $universityYear,
        ]);
    }

    /**
     * Faculty ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $universityFacultyId
     *
     * @return $this
     */
    public function universityFaculty(int $universityFacultyId): static
    {
        return $this->addField([
            __FUNCTION__ => $universityFacultyId,
        ]);
    }

    /**
     * Department ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $universityChairId
     *
     * @return $this
     */
    public function universityChair(int $universityChairId): static
    {
        return $this->addField([
            __FUNCTION__ => $universityChairId,
        ]);
    }

    /**
     * User sex.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param SearchSex $sex
     *
     * @return static
     */
    public function sex(SearchSex $sex): static
    {
        return $this->addField([
            __FUNCTION__ => $sex->value,
        ]);
    }

    /**
     * A woman.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function sexFemale(): static
    {
        return $this->sex(SearchSex::FEMALE);
    }

    /**
     * The man.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function sexMale(): static
    {
        return $this->sex(SearchSex::MALE);
    }

    /**
     * All of them (default).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function sexAll(): static
    {
        return $this->sex(SearchSex::ALL);
    }

    /**
     * Family status.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param SearchStatus $status
     *
     * @return static
     */
    public function status(SearchStatus $status): static
    {
        return $this->addField([
            __FUNCTION__ => $status->value,
        ]);
    }

    /**
     * Unmarried (not married).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusUnmarried(): static
    {
        return $this->status(SearchStatus::UNMARRIED);
    }

    /**
     * Meet.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusMeet(): static
    {
        return $this->status(SearchStatus::MEET);
    }

    /**
     * Engaged.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusEngaged(): static
    {
        return $this->status(SearchStatus::ENGAGED);
    }

    /**
     * Married.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusMarried(): static
    {
        return $this->status(SearchStatus::MARRIED);
    }

    /**
     * It's complicated.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusComplicated(): static
    {
        return $this->status(SearchStatus::COMPLICATED);
    }

    /**
     * In active search.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusInActiveSearch(): static
    {
        return $this->status(SearchStatus::ACTIVE_SEARCH);
    }

    /**
     * In love.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusFollows(): static
    {
        return $this->status(SearchStatus::FOLLOWS);
    }

    /**
     * In a civil marriage.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function statusCivilMarriage(): static
    {
        return $this->status(SearchStatus::CIVIL_MARRIAGE);
    }

    /**
     * Age, from.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $ageFrom
     *
     * @return static
     */
    public function ageFrom(int $ageFrom): static
    {
        return $this->addField([
            __FUNCTION__ => $ageFrom,
        ]);
    }

    /**
     * Age, before.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $ageTo
     *
     * @return static
     */
    public function ageTo(int $ageTo): static
    {
        return $this->addField([
            __FUNCTION__ => $ageTo,
        ]);
    }

    /**
     * Day of birth.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $day
     *
     * @return static
     */
    public function birthDay(int $day): static
    {
        return $this->addField([
            __FUNCTION__ => $day,
        ]);
    }

    /**
     * Month of birth.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $month
     *
     * @return static
     */
    public function birthMonth(int $month): static
    {
        return $this->addField([
            __FUNCTION__ => $month,
        ]);
    }

    /**
     * Year of birth.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $year
     *
     * @return static
     */
    public function birthYear(int $year): static
    {
        return $this->addField([
            __FUNCTION__ => $year,
        ]);
    }

    /**
     * Consider the status of `online`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param SearchOnline $online
     *
     * @return static
     */
    public function online(SearchOnline $online): static
    {
        return $this->addField([
            __FUNCTION__ => $online->value,
        ]);
    }

    /**
     * Search only for those who are online.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function onlineOnly(): static
    {
        return $this->online(SearchOnline::ONLINE);
    }

    /**
     * Search for everyone, regardless of the status of `online`
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function onlineAll(): static
    {
        return $this->online(SearchOnline::ALL);
    }

    /**
     * Take into account the presence of a photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param SearchHasPhoto $hasPhoto
     *
     * @see self::withPhoto()
     * @see self::withoutPhoto()
     *
     * @return static
     */
    public function hasPhoto(SearchHasPhoto $hasPhoto): static
    {
        return $this->addField([
            __FUNCTION__ => $hasPhoto->value,
        ]);
    }

    /**
     * Be sure to take into account the presence of a photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function withPhoto(): static
    {
        return $this->hasPhoto(SearchHasPhoto::YES);
    }

    /**
     * Do not take into account the presence of a photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function withoutPhoto(): static
    {
        return $this->hasPhoto(SearchHasPhoto::NO);
    }

    /**
     * Identification of the country in which users graduated from school.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $schoolCountryId
     *
     * @return static
     */
    public function schoolCountry(int $schoolCountryId): static
    {
        return $this->addField([
            __FUNCTION__ => $schoolCountryId,
        ]);
    }

    /**
     * Identification of the city in which users graduated from school.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $schoolCityId
     *
     * @return static
     */
    public function schoolCity(int $schoolCityId): static
    {
        return $this->addField([
            __FUNCTION__ => $schoolCityId,
        ]);
    }

    /**
     * Identification of the class in which users graduated from school.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $schoolClass
     *
     * @return static
     */
    public function schoolClass(int $schoolClass): static
    {
        return $this->addField([
            __FUNCTION__ => $schoolClass,
        ]);
    }

    /**
     * Identification of the school.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $schoolId
     *
     * @return static
     */
    public function school(int $schoolId): static
    {
        return $this->addField([
            __FUNCTION__ => $schoolId,
        ]);
    }

    /**
     * Identification of the year in which users graduated from school.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $schoolYear
     *
     * @return static
     */
    public function schoolYear(int $schoolYear): static
    {
        return $this->addField([
            __FUNCTION__ => $schoolYear,
        ]);
    }

    /**
     * Religious views.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param string $religion
     *
     * @return static
     */
    public function religion(string $religion): static
    {
        return $this->addField([
            __FUNCTION__ => $religion,
        ]);
    }

    /**
     * The name of the company in which the users work.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param string $company
     *
     * @return static
     */
    public function company(string $company): static
    {
        return $this->addField([
            __FUNCTION__ => $company,
        ]);
    }

    /**
     * Position in company.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param string $position
     *
     * @return static
     */
    public function position(string $position): static
    {
        return $this->addField([
            __FUNCTION__ => $position,
        ]);
    }

    /**
     * Identification of the group among whose users it is necessary to search.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param int $groupId
     *
     * @return static
     */
    public function groupId(int $groupId): static
    {
        return $this->addField([
            __FUNCTION__ => $groupId,
        ]);
    }

    /**
     * The sections among which you need to search.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param SearchFromList $fromList
     *
     * @return static
     */
    public function fromList(SearchFromList $fromList): static
    {
        return $this->addField([
            __FUNCTION__ => $fromList->value,
        ]);
    }

    /**
     * Search among friends.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function fromFriendsList(): static
    {
        return $this->fromList(SearchFromList::FRIENDS);
    }

    /**
     * Search among subscriptions.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @return static
     */
    public function fromSubscriptionsList(): static
    {
        return $this->fromList(SearchFromList::SUBSCRIPTIONS);
    }

    /**
     * Referrer, where the method was called.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param string $screenRef
     *
     * @return static
     */
    public function screenRef(string $screenRef): static
    {
        return $this->addField([
            __FUNCTION__ => $screenRef,
        ]);
    }
}
