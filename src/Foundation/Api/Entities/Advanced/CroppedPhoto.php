<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;
use Hopex\VkSdk\Foundation\Api\Entities\Attachments\Photo;

/**
 * Returns data on the points at which profile and miniature photos of the user are cut, if available.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
 *
 * @property-read array $crop
 * @property-read array $rectangle
 * @property-read array $photo
 */
class CroppedPhoto extends AbstractEntity
{
    /**
     * A user photo from which the main profile photo is cut.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return Photo
     */
    public function photo(): Photo
    {
        return new Photo($this->photo ?? []);
    }

    /**
     * The user's cut-out photo.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return Crop
     */
    public function cropped(): Crop
    {
        return new Crop($this->crop ?? []);
    }

    /**
     * A miniature square photography cut from a photography {@see CroppedPhoto::cropped()}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return Crop
     */
    public function rectangle(): Crop
    {
        return new Crop($this->rectangle ?? []);
    }
}
