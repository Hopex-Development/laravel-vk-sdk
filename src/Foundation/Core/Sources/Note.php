<?php

namespace Hopex\VkSdk\Foundation\Core\Sources;

use Hopex\VkSdk\Exceptions\Callback\NoteException;
use Illuminate\Support\Facades\Storage;

/**
 * Class Note
 * @package Hopex\VkSdk\Foundation
 */
class Note extends Source
{
    /** @var string  */
    protected string $path = 'vk-sdk/notes/%s.md';

    /**
     * @param string $key
     * @return string
     * @throws NoteException
     */
    public function get(string $key): string
    {
        $keyboard = Storage::path(sprintf($this->path, $key));

        if (!file_exists($keyboard)) {
            throw new NoteException();
        }

        return file_get_contents($keyboard);
    }
}
