<?php

namespace Hopex\VkSdk\Foundation\Core\Community;

/**
 * Информация из блока ссылок сообщества.
 *
 * @package Hopex\VkSdk\Foundation\Core\Community
 */
class Links
{
    #region Properties

    /**
     * Идентификатор ссылки.
     *
     * @var int
     */
    protected int $id;

    /**
     * URL.
     *
     * @var string
     */
    protected string $url;

    /**
     * Название ссылки.
     * @var string
     */
    protected string $name;

    /**
     * Описание ссылки.
     *
     * @var string
     */
    protected string $description;

    /**
     * URL изображения-превью шириной 50px.
     * @var string
     */
    protected string $photo50;

    /**
     * URL изображения-превью шириной 100px.
     *
     * @var string
     */
    protected string $photo100;

    #endregion

    #region Getters

    /**
     * Идентификатор ссылки.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Название ссылки.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Описание ссылки.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * URL изображения-превью шириной 50px.
     *
     * @return string
     */
    public function getPhoto50(): string
    {
        return $this->photo50;
    }

    /**
     * @return string
     */
    public function getPhoto100(): string
    {
        return $this->photo100;
    }

    #endregion

    public function __construct(array $links)
    {
        $this->id = $links['id'];
        $this->url = $links['url'];
        $this->name = $links['name'];
        $this->description = $links['desc'];
        $this->photo50 = $links['photo_50'];
        $this->photo100 = $links['photo_100'];
    }
}
