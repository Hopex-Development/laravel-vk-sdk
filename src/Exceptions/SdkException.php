<?php

namespace Hopex\VkSdk\Exceptions;

use Exception;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Formatters\JsonExceptionFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

/**
 * Class SdkException
 * @package Hopex\VkSdk\Exceptions
 */
class SdkException extends Exception
{
    /** @var string */
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
        Log::build((array)SdkConfig::logging(self::LOG_CHANNEL))->error($this->getMessage());
    }

    /**
     * @return JsonResponse|void
     */
    final public function render()
    {
        if (env('LOG_LEVEL') === 'debug') {
            return new JsonResponse(
                (new JsonExceptionFormatter())->format($this->getMessage()),
                500
            );
        }
    }
}
