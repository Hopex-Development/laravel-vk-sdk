<?php

namespace Hopex\VkSdk\Foundation\Core\Storage;

use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Exceptions\Storage\SourceNotFoundException;
use Hopex\VkSdk\Formatters\SourceDataFormatter;
use Hopex\VkSdk\Foundation\Core\Logging\SourceLogger;
use Illuminate\Support\Facades\Storage as _Storage;
use Throwable;

/**
 * Class Storage
 * @package Hopex\VkSdk\Foundation\Core\Sources
 */
class Storage extends SourceLogger
{
    protected string $rootFolder = 'vk-sdk';

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $fileName
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

        $directoryFiles = _Storage::files($searchDirectory);
        $matchingFiles = preg_grep("~$fileName\.~", $directoryFiles);

        throw_if(
            !$matchingFiles,
            SourceNotFoundException::class,
            _Storage::path($searchDirectory . DIRECTORY_SEPARATOR . $fileName)
        );

        return (new SourceDataFormatter())->format(
            file_get_contents(_Storage::path($matchingFiles[0]))
        );
    }
}
