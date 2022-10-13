<?php

namespace Hopex\VkSdk\Exceptions\Api;

use Exception;

/**
 * Class ApiException
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiException extends Exception
{
    protected int $error_code;
    protected string $description;
    protected ?string $error_message;
    protected ApiError $error;

    /**
     * ApiException constructor.
     *
     * @param int $error_code
     * @param string $description
     * @param ApiError $error
     */
    public function __construct(int $error_code, string $description, ApiError $error)
    {
        $this->error_code       = $error_code;
        $this->description      = $description;
        $this->error_message    = $error->getErrorMsg();
        $this->error            = $error;

        parent::__construct($error->getErrorMsg(), $error_code);
    }

    /**
     * Код ошибки.
     *
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->error_code;
    }

    /**
     * Описание ошибки.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Сообщение об ошибке.
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->error_message;
    }

    /**
     * Объект ошибки.
     *
     * @return ApiError
     */
    public function getError(): ApiError
    {
        return $this->error;
    }
}
