<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Helpers;

use Hopex\VkSdk\Foundation\Api\Entities\Attachments\Photo;
use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Photo size. Copy of the image in different size.<br>
 * Using the parameter `photoSizes` in methods for working with photos, the response returns information about copies
 * of the original image of different sizes, presented in the form of an array {@see Photo::sizes()}.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Helpers
 *
 * @link    https://dev.vk.com/en/reference/objects/photo-sizes
 *
 * @property-read string $type
 * @property-read int    $height
 * @property-read int    $width
 * @property-read string $url
 */
class PhotoSize extends AbstractEntity
{
    /**
     * URL a copy of the image.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#url
     *
     * @return string
     */
    public function url(): string
    {
        return $this->url ?? '';
    }

    /**
     * The width of the copy in pixels.
     * <br><br>
     *
     * For photos uploaded to the site before `2012`, the values width and height may not be available, in which case
     * the corresponding fields contain `0`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#width
     *
     * @return int
     */
    public function width(): int
    {
        return $this->width ?? 0;
    }

    /**
     * The height of the copy in pixels.
     * <br><br>
     *
     * For photos uploaded to the site before `2012`, the values width and height may not be available, in which case
     * the corresponding fields contain `0`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#height
     *
     * @return int
     */
    public function height(): int
    {
        return $this->height ?? 0;
    }

    /**
     * Image resolution by custom string format.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $pattern Custom string format, for example: `Your resolution: {width}x{height}`.
     *
     * @return string
     */
    public function resolutionFormat(string $pattern): string
    {
        return str_replace(
            '{height}',
            $this->height(),
            str_replace(
                '{width}',
                $this->width(),
                $pattern
            )
        );
    }

    /**
     * The size and proportions of the copy.
     *
     * ### For photos:
     * * S — Is a proportional copy of the image with a maximum side of `75px`;
     * * M — Is a proportional copy of the image with a maximum side of `130px`;
     * * X — Is a proportional copy of the image with a maximum side of `604px`;
     * * O — If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `130px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left with a maximum side of 130px and an aspect ratio of `3:2`;
     * * P — If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `200px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left and right with a maximum side of 200px and an aspect ratio of `3:2`;
     * * Q — If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `320px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left and right with a maximum side of 320px and an aspect ratio of `3:2`;
     * * R — If the width/height ratio of the original image is less than or equal to `3:2`, then a proportional copy
     * with a maximum side of `510px`. If the width/height ratio is greater than `3:2`, then a copy of the cropped
     * image on the left and right with a maximum side of 510px and an aspect ratio of `3:2`;
     * * Y — Is a proportional copy of the image with a maximum side of `807px`;
     * * Z — Is a proportional copy of the image with a maximum size of `1080x1024px`;
     * * W — Is a proportional copy of the image with a maximum size of `1080x2048px`, value may not be available for
     * photos uploaded to the site before `2012`.
     *
     * ### For documents (`preview` field):
     * * S — Proportional copy of the image with a maximum side of `100px`;
     * * M — Proportional copy of the image with a maximum side of `130px`;
     * * X — Proportional copy of the image with a maximum side of `604px`;
     * * Y — Proportional copy of the image with a maximum side of `807px`;
     * * Z — Is a proportional copy of the image with a maximum size of `1080x1024px`;
     * * O — Is a copy of the image with the dimensions of the original.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/photo-sizes#type
     *
     * @return string
     */
    public function type(): string
    {
        return $this->type ?? '';
    }
}
