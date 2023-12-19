<?php

namespace Hopex\VkSdk\Exceptions\Storage;

use Hopex\VkSdk\Exceptions\Exception;

/**
 * Storage not found exception.
 *
 * @package Hopex\VkSdk\Exceptions\Storage
 */
class SourceNotFoundException extends Exception
{
    public $message = 'Target source file [%s] not found.'.
    'Note: The file extension is optional and a link to the repository in the public folder is not required.' .
    'Try publishing the SDK resources: "php artisan vendor:publish --tag=vk-sdk-sources"';

    /**
     * Storage not found exception.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        parent::__construct($this->format($fileName));
    }
}
