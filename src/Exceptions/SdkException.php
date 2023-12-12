<?php

namespace Hopex\VkSdk\Exceptions;

use Exception;
use Hopex\VkSdk\Facades\Config;
use Hopex\VkSdk\Formatters\JsonExceptionFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

/**
 * Sdk exception.
 *
 * @package Hopex\VkSdk\Exceptions
 */
class SdkException extends Exception
{
    private const LOG_CHANNEL = 'channels.exception';

    /**
     * Sdk exception.
     *
     * @param string|null $message
     */
    public function __construct(string $message = null)
    {
        $this->message = $message ?? $this->getMessage();
        $this->report();

        parent::__construct();
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return void
     */
    protected function report(): void
    {
        Log::build(Config::logging()->channels()->getByName(self::LOG_CHANNEL))->error($this->getMessage());
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
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

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param ...$args
     *
     * @return string
     */
    final public function format(...$args): string
    {
        return sprintf($this->message, ...$args);
    }
}
