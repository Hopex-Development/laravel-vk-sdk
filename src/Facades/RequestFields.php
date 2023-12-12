<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair\ChairRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City\CityRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country\CountryRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Faculty\FacultyRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro\MetroStationRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Region\RegionRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses\SchoolClassRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\University\UniversityRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Groups\GroupRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserRequestFields;
use Illuminate\Support\Facades\Facade;

/**
 * Class RequestFields
 *
 * @package Hopex\VkSdk\Facades
 *
 * @method static GroupRequestFields group
 * @method static MessageRequestFields message
 * @method static UserRequestFields user
 * @method static UniversityRequestFields university
 * @method static SchoolRequestFields school
 * @method static SchoolClassRequestFields schoolClass
 * @method static RegionRequestFields region
 * @method static MetroStationRequestFields metroStation
 * @method static FacultyRequestFields faculty
 * @method static CountryRequestFields country
 * @method static CityRequestFields city
 * @method static ChairRequestFields chair
 */
class RequestFields extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Core\Entities\RequestFields::class;
    }
}
