<?php

namespace Hopex\VkSdk\Foundation\Core\Storage;

use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Exceptions\Storage\SourceNotFoundException;
use Hopex\VkSdk\Foundation\Core\Logging\SourceLogger;
use Illuminate\Support\Facades\Storage as BaseStorage;
use Throwable;

/**
 * Implements the basic functionality of resource processing.
 *
 * @package Hopex\VkSdk\Foundation\Core\Storage
 */
class Storage extends SourceLogger
{
    /**
     * The root folder of the resource.
     *
     * @var string
     *
     * @version SDK: 3
     */
    protected string $rootFolder = 'vk-sdk';

    /**
     * Returns data from the specified file.
     *
     * @version SDK: 3
     *
     * @param string $fileName The name of the file whose data needs to be retrieved.
     *
     * @throws InvalidInputDataTypeException
     * @throws Throwable
     *
     * @return string
     */
    public function get(string $fileName): string
    {
        $fileName = preg_replace('~^(.*)(\..*)$~', '$1', $fileName);
        $searchDirectory = str_replace('.', DIRECTORY_SEPARATOR, $this->rootFolder);

        $directoryFiles = BaseStorage::files($searchDirectory);
        $matchingFiles = preg_grep("~$fileName\.~", $directoryFiles);

        throw_if(
            !$matchingFiles,
            SourceNotFoundException::class,
            BaseStorage::path($searchDirectory . DIRECTORY_SEPARATOR . $fileName)
        );

        return BaseStorage::get($matchingFiles[0]);
    }
}
