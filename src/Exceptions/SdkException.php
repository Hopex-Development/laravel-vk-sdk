<?php

namespace Hopex\VkSdk\Exceptions;

use Exception;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Facades\Format;
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
    /**
     * @param $message
     * @param $code
     * @param Throwable|null $previous
     */
    public function __construct($message, $code = 500, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->report();
    }

    /**
     * @return void
     */
    protected function report(): void
    {
        Log::build((array)SdkConfig::logging('channels.exception'))->warning($this->getMessage());
    }

    /**
     * @param Request $request
     * @return JsonResponse|void
     */
    final public function render(Request $request)
    {
        if (env('LOG_LEVEL') === 'debug') {
            return new JsonResponse(
                Format::with(JsonExceptionFormatter::class)->format($this->getMessage()),
                $this->getCode()
            );
        }
    }
}
