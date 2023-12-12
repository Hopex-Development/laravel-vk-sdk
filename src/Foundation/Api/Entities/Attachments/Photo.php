<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Attachments;

use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\Entities\Entity;
use Hopex\VkSdk\Foundation\Api\Entities\Helpers\PhotoSize;
use Hopex\VkSdk\Foundation\Api\Methods\Users;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder;
use Illuminate\Support\Carbon;
use Throwable;

/**
 * The object describing the photo.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Attachments
 *
 * @link    https://dev.vk.com/en/reference/objects/photo
 *
 * @property-read int    $postId
 * @property-read int    $ownerId
 * @property-read int    $albumId
 * @property-read int    $date
 * @property-read int    $id
 * @property-read array  $sizes
 * @property-read string $text
 * @property-read int    $userId
 * @property-read bool   $hasTags
 * @property-read string $webViewToken
 * @property-read string $squareCrop
 * @property-read string $photo2560
 * @property-read string $photo1280
 * @property-read string $photo807
 * @property-read string $photo604
 * @property-read string $photo130
 * @property-read string $photo75
 * @property-read int    $height
 * @property-read int    $width
 */
class Photo extends Entity
{
    /**
     * Photo ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#id
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The ID of the album in which the photo is located.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#album_id
     *
     * @return int
     */
    public function albumId(): int
    {
        return $this->albumId ?? 0;
    }

    /**
     * Identification of the owner of the photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#owner_id
     *
     * @return int
     */
    public function ownerId(): int
    {
        return $this->ownerId ?? 0;
    }

    /**
     * The owner of the photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param UsersFields|null $usersFields
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     * @return User|false
     */
    public function owner(UsersFields $usersFields = null): User|false
    {
        return (new Users())->get(
            (new UsersGetRequestBuilder())->userIds([$this->ownerId()])->fields($usersFields ?? new UsersFields())
        );
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#post_id
     *
     * @return int
     */
    public function postId(): int
    {
        return $this->postId ?? 0;
    }

    /**
     * Identification of the user who uploaded the photo (if the photo is posted in the community). For photos posted
     * on behalf of the community, `userId` = `100`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#user_id
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->userId;
    }

    /**
     * The user who uploaded the photo (if the photo is posted in the community).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param UsersFields|null $usersFields
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     * @return false|User
     */
    public function user(UsersFields $usersFields = null): User|false
    {
        return (new Users())->get(
            (new UsersGetRequestBuilder())->userIds([$this->userId()])->fields($usersFields ?? new UsersFields())
        );
    }

    /**
     * Text description of the photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#text
     *
     * @return string
     */
    public function text(): string
    {
        return $this->text ?? '';
    }

    /**
     * Date added in Unix time format represented as a Carbon object.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#date
     *
     * @return Carbon
     */
    public function date(): Carbon
    {
        return (new Carbon($this->date ?? 0))->setTimezone(config('app.timezone'));
    }

    /**
     * Array with copies of the image in different sizes.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#sizes
     *
     * @return PhotoSize[]
     */
    public function sizes(): array
    {
        return array_map(fn($size) => new PhotoSize($size), $this->sizes ?? []);
    }

    /**
     * Get the size of the photo by the `type` of {@see PhotoSize}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @see     PhotoSize::type()
     *
     * @param string $type
     *
     * @return PhotoSize|null
     */
    private function getPhotoSizeByType(string $type): ?PhotoSize
    {
        return array_values(
            array_filter($this->sizes(), fn(PhotoSize $size) => compare($type, $size->type()))
        )[0] ?? null;
    }

    /**
     * #### For photos:
     * Is a proportional copy of the image with a maximum side of `75px`.
     *
     * #### For documents (`preview` field):
     * Proportional copy of the image with a maximum side of `100px`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function s(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * #### For photos:
     * Is a proportional copy of the image with a maximum side of `130px`.
     *
     * #### For documents (`preview` field):
     * Proportional copy of the image with a maximum side of `130px`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function m(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * #### For photos:
     * Is a proportional copy of the image with a maximum side of `604px`.
     *
     * #### For documents (`preview` field):
     * Proportional copy of the image with a maximum side of `604px`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function x(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * #### For photos:
     * If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `130px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left with a maximum side of 130px and an aspect ratio of `3:2`.
     *
     * #### For documents (`preview` field):
     * Is a copy of the image with the dimensions of the original.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function o(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `200px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left and right with a maximum side of 200px and an aspect ratio of `3:2`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function p(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `320px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left and right with a maximum side of 320px and an aspect ratio of `3:2`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function q(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `510px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left and right with a maximum side of 510px and an aspect ratio of `3:2`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function r(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * #### For photos:
     * Is a proportional copy of the image with a maximum side of `807px`.
     *
     * #### For documents (`preview` field):
     * Proportional copy of the image with a maximum side of `807px`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function y(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * #### For photos:
     * Is a proportional copy of the image with a maximum size of `1080x1024px`.
     *
     * #### For documents (`preview` field):
     * Is a proportional copy of the image with a maximum size of `1080x1024px`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function z(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * Is a proportional copy of the image with a maximum size of `1080x2048px`, value may not be available for photos
     * uploaded to the site before `2012`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return PhotoSize|null
     */
    public function w(): ?PhotoSize
    {
        return $this->getPhotoSizeByType(__FUNCTION__);
    }

    /**
     * Tony Stark was able to bring back half the population of the universe, but he couldn't bring back the
     * description that was once here.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string
     */
    public function squareCrop(): string
    {
        return $this->squareCrop;
    }

    /**
     * Tony Stark was able to bring back half the population of the universe, but he couldn't bring back the
     * description that was once here.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string
     */
    public function webViewToken(): string
    {
        return $this->webViewToken ?? '';
    }

    /**
     * Tony Stark was able to bring back half the population of the universe, but he couldn't bring back the
     * description that was once here.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool
     */
    public function hasTags(): bool
    {
        return $this->hasTags ?? false;
    }

    /**
     * The width of the original photo in pixels, value may not be available for
     * photos uploaded to the site before `2012`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#width%20*
     *
     * @return int
     */
    public function width(): int
    {
        return $this->width ?? 0;
    }

    /**
     * The height of the original photo in pixels, value may not be available for
     * photos uploaded to the site before `2012`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo#height%20*
     *
     * @return int
     */
    public function height(): int
    {
        return $this->height ?? 0;
    }

    /**
     * URL copies of the photo with the maximum size `75x75px`.
     *
     * @version VK: 5.77 | SDK: 3 | Summary: 5.77.3
     * @link    https://dev.vk.com/en/reference/objects/photo#photo_75
     *
     * @return string
     */
    public function photo75(): string
    {
        return $this->photo75 ?? '';
    }

    /**
     * URL copies of the photo with the maximum size `130x130px`.
     *
     * @version VK: 5.77 | SDK: 3 | Summary: 5.77.3
     * @link    https://dev.vk.com/en/reference/objects/photo#photo_130
     *
     * @return string
     */
    public function photo130(): string
    {
        return $this->photo130 ?? '';
    }

    /**
     * URL copies of the photo with the maximum size `604x604px`.
     *
     * @version VK: 5.77 | SDK: 3 | Summary: 5.77.3
     * @link    https://dev.vk.com/en/reference/objects/photo#photo_604
     *
     * @return string
     */
    public function photo604(): string
    {
        return $this->photo604 ?? '';
    }

    /**
     * URL copies of the photo with the maximum size `807x807px`.
     *
     * @version VK: 5.77 | SDK: 3 | Summary: 5.77.3
     * @link    https://dev.vk.com/en/reference/objects/photo#photo_807
     *
     * @return string
     */
    public function photo807(): string
    {
        return $this->photo807 ?? '';
    }

    /**
     * URL copies of the photo with the maximum size `1280x1024px`.
     *
     * @version VK: 5.77 | SDK: 3 | Summary: 5.77.3
     * @link    https://dev.vk.com/en/reference/objects/photo#photo_1280
     *
     * @return string
     */
    public function photo1280(): string
    {
        return $this->photo1280 ?? '';
    }

    /**
     * URL copies of the photo with the maximum size `2560x2048px`.
     *
     * @version VK: 5.77 | SDK: 3 | Summary: 5.77.3
     * @link    https://dev.vk.com/en/reference/objects/photo#photo_2560
     *
     * @return string
     */
    public function photo2560(): string
    {
        return $this->photo2560 ?? '';
    }
}
