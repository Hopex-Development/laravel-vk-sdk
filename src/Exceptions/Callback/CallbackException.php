<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Exception;
use Hopex\VkSdk\Facades\Configure;
use Hopex\VkSdk\Facades\Format;
use Hopex\VkSdk\Formatters\JsonExceptionFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class CallbackException extends Exception
{
    /**
     * HTTP статус.
     *
     * @var int
     */
    protected $code = 400;

    public function __construct($message = "unknown", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->report();
    }

    /**
     * Отчет об исключении.
     *
     * @return void
     */
    protected function report(): void
    {
        Log::build((array)Configure::logging('channels.exception'))
            ->warning($this->getMessage());
    }

    /**
     * Отображение сообщения об исключении в HTTP ответе.
     *
     * @param Request $request
     * @return JsonResponse
     */
    final public function render(Request $request): JsonResponse
    {
        return new JsonResponse(
            Format::with(JsonExceptionFormatter::class)->format($this),
            $this->getCode()
        );
    }
}
