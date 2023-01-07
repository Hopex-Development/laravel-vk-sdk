<?php

namespace Hopex\VkSdk\Foundation\Core\Sources;

use Hopex\VkSdk\Exceptions\Callback\KeyboardException;
use Illuminate\Support\Facades\Storage;

/**
 * Class Keyboard
 * @package Hopex\VkSdk\Foundation
 */
class Keyboard extends Source
{
    /** @var string */
    protected string $path = 'vk-sdk/keyboards/%s.json';

    /**
     * @param string $key
     * @return string
     * @throws KeyboardException
     */
    public function get(string $key): string
    {
        $keyboard = Storage::path(sprintf($this->path, $this->makePath($key)));

        if (!file_exists($keyboard)) {
            $this->logger->emergency("Keyboard not found: $keyboard");
            throw new KeyboardException();
        }

        return file_get_contents($keyboard);
    }
}
