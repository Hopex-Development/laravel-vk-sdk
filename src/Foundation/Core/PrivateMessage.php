<?php

namespace Hopex\VkSdk\Foundation\Core;

use Hopex\VkSdk\Contracts\PrivateMessageContract;

/**
 * Личное сообщение (VK API ^5.80).
 *
 * @package Hopex\VkSdk\Foundation\Core
 */
abstract class PrivateMessage implements PrivateMessageContract
{
    /**
     * Идентификатор сообщения.
     *
     * @var int
     */
    protected int $id;

    /**
     * Время отправки в Unixtime.
     *
     * @var int
     */
    protected int $date;

    /**
     * Идентификатор назначения.
     *
     * @var int
     */
    protected int $peerId;

    /**
     * Идентификатор отправителя.
     *
     * @var int
     */
    protected int $fromId;

    /**
     * Текст сообщения.
     *
     * @var string
     */
    protected string $text;

    /**
     * Идентификатор, используемый при отправке сообщения.
     * Возвращается только для исходящих сообщений.
     *
     * @var int
     */
    protected int $randomId;

    /**
     * Произвольный параметр для работы с источниками переходов.
     *
     * @var string
     */
    protected string $reference;

    /**
     * Произвольный параметр для работы с источниками переходов.
     *
     * @var string
     */
    protected string $referenceSource;

    /**
     * Медиавложения сообщения.
     *
     * @var array
     */
    protected array $attachments;

    /**
     * TRUE, если сообщение помечено как важное.
     *
     * @var bool
     */
    protected bool $important;

    /**
     * Информация о местоположении.
     *
     * @var
     */
    protected $geo;

    /**
     * Сервисное поле для сообщений ботам (полезная нагрузка).
     *
     * @var string
     */
    protected string $payload;

    /**
     * Объект клавиатуры для ботов.
     *
     * @var
     */
    protected $keyboard;

    /**
     * Массив пересланных сообщений (если есть).
     * Максимальное количество элементов — 100.
     * Максимальная глубина вложенности для пересланных сообщений — 45,
     * общее максимальное количество в цепочке с учетом вложенности — 500.
     *
     * @var array
     */
    protected array $forwardMessages;

    /**
     * Сообщение, в ответ на которое отправлено текущее.
     *
     * @var
     */
    protected $replyMessage;

    /**
     * Информация о сервисном действии с чатом.
     *
     * @var
     */
    protected $action;

    /**
     * Только для сообщений сообщества.
     * Содержит идентификатор пользователя (администратора сообщества),
     * отправившего это сообщение.
     *
     * @var int
     */
    protected int $adminAuthorId;

    /**
     * Уникальный автоматически увеличивающийся номер
     * для всех сообщений текущего чата.
     *
     * @var int
     */
    protected int $conversationMessageId;

    /**
     * Это сообщение обрезано для бота.
     *
     * @var bool
     */
    protected bool $isCropped;

    /**
     * Количество участников.
     *
     * @var int
     */
    protected int $membersCount;

    /**
     * Дата, когда сообщение было обновлено в Unixtime.
     *
     * @var int
     */
    protected int $updateTime;

    /**
     * Было ли вложенное аудио-сообщение уже прослушано вами.
     *
     * @var bool
     */
    protected bool $wasListened;

    /**
     * Дата, когда сообщение было закреплено в Unixtime.
     *
     * @var int
     */
    protected int $pinnedAt;

    /**
     * Строка для сопоставления пользователя Notify и ВКонтакте.
     * Данные копирует в момент ответа пользователем на сообщение из Notify,
     * отправленное с параметром session_id.
     * Подробнее про Notify: https://notify.mail.ru
     *
     * @var string
     */
    protected string $messageTag;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
