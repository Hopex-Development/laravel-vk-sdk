<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * The user's cut-out photo.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
 *
 * @property-read float $y2
 * @property-read float $x2
 * @property-read float $y
 * @property-read float $x
 */
class Crop extends AbstractEntity
{
    /**
     * The `X` coordinate of the upper left corner as a percentage.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return float
     */
    public function x(): float
    {
        return $this->x ?? .0;
    }

    /**
     * The `Y` coordinate of the upper left corner as a percentage.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return float
     */
    public function y(): float
    {
        return $this->y ?? .0;
    }

    /**
     * The `X` coordinate of the lower right corner as a percentage.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return float
     */
    public function x2(): float
    {
        return $this->x2 ?? .0;
    }

    /**
     * The `Y` coordinate of the lower right corner as a percentage.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#crop_photo
     *
     * @return float
     */
    public function y2(): float
    {
        return $this->y2 ?? .0;
    }
}
