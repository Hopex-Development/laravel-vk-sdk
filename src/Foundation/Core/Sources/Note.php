<?php

namespace Hopex\VkSdk\Foundation\Core\Sources;

use Hopex\VkSdk\Exceptions\Callback\NoteException;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Illuminate\Support\Facades\Storage;

/**
 * Class Note
 * @package Hopex\VkSdk\Foundation
 */
class Note extends Source
{
    /** @var string */
    protected string $path = 'vk-sdk/notes/%s.dat';

    /**
     * @param string $key
     * @return string
     * @throws NoteException
     * @throws InvalidInputDataTypeException
     */
    public function get(string $key): string
    {
        $note = Storage::path(sprintf($this->path, $this->makePath($key)));

        if (!file_exists($note)) {
            $this->logger->emergency("Note not found: $note");
            throw new NoteException();
        }

        return $this->load($note);
    }
}
