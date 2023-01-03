<?php

namespace Hopex\VkSdk\Exceptions;

use Exception;
use Hopex\VkSdk\Facades\Format;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Formatters\JsonExceptionFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Class SdkException
 * @package Hopex\VkSdk\Exceptions
 */
class SdkException extends Exception
{
    /** @var string  */
    private const LOG_CHANNEL = 'channels.exception';

    public function __construct()
    {
        $this->message = preg_replace("~vk-sdk\.~", '', __("vk-sdk.{$this->getMessage()}"));
        $this->report();

        parent::__construct();
    }

    /**
     * @return void
     */
    protected function report(): void
    {
        Log::build((array)SdkConfig::logging(self::LOG_CHANNEL))->warning($this->getMessage());
    }

    /**
     * @return JsonResponse|void
     */
    final public function render()
    {
        if (env('LOG_LEVEL') === 'debug') {
            return new JsonResponse(
                Format::with(JsonExceptionFormatter::class)->format($this->getMessage()),
                $this->getCode()
            );
        }
    }
}
