<?php

namespace Hopex\VkSdk\Exceptions;

use Exception as BaseException;
use Hopex\VkSdk\Facades\Config;
use Hopex\VkSdk\Formatters\Exceptions\ExceptionMessageFormatter;
use Hopex\VkSdk\Formatters\Exceptions\JsonExceptionFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

/**
 * Base class for all exceptions for SDK.
 *
 * @package Hopex\VkSdk\Exceptions
 */
class Exception extends BaseException
{
    /**
     * The status code for this exception.
     *
     * @version SDK: 3
     *
     * @var int
     */
    protected $code = 500;

    /**
     * The standard logging channel.
     *
     * @version SDK: 3
     *
     * @var string
     */
    private const LOG_CHANNEL = 'exception';

    /**
     * Base class for all exceptions for SDK.
     *
     * @version SDK: 3
     *
     * @param string|null $message Message for exception.
     */
    public function __construct(string $message = null)
    {
        $this->code = crc32(get_class($this));
        $this->message = $message ?? $this->getMessage();
        $this->report();

        parent::__construct();
    }

    /**
     * Creating an entry in the logging file about the exception that occurred.
     *
     * @version SDK: 3
     *
     * @return void
     */
    protected function report(): void
    {
        $logging = Config::logging();
        $reportMessage = [
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
            'about' => 'https://vk-sdk.hopex.ru/docs/exceptions?code='.$this->getCode(),
            'trace' => 'Tracing is disabled in the application settings',
        ];

        if ($logging->tracing()) {
            $reportMessage['trace'] = $this->getTrace();
        }

        $report = json_encode($reportMessage, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        Log::build($logging->channels()->getByName(self::LOG_CHANNEL))->critical($report);
    }

    /**
     * Converting an exception to a JSON response.
     *
     * @version SDK: 3
     *
     * @return JsonResponse|void
     */
    final public function render()
    {
        if (compare(config('logging.level'), 'debug')) {
            return new JsonResponse((new JsonExceptionFormatter())->format($this->getMessage()), 500);
        }
    }

    /**
     * Formatting of the exception message, which implements the substitution of input parameters into a template
     * located in the redefined property of the exception message.
     *
     * @version SDK: 3
     *
     * @param mixed ...$args Arguments for formatting.
     *
     * @return string
     */
    final public function format(mixed ...$args): string
    {
        return (new ExceptionMessageFormatter())->format([
            'message' => $this->message,
            'arguments' => $args,
        ]);
    }
}
