<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Client;

use Illuminate\Support\Collection;

/**
 * Class MessageFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Client
 */
class ClientFields
{
    private const BUTTON_ACTIONS    = "button_actions";
    private const KEYBOARD          = "keyboard";
    private const INLINE_KEYBOARD   = "inline_keyboard";
    private const CAROUSEL          = "carousel";
    private const LANG_ID           = "lang_id";

    /**
     * @var Collection
     */
    private Collection $client;

    /**
     * MessageFields constructor.
     * @param Collection $client
     */
    public function __construct(Collection $client)
    {
        $this->client = $client;
    }

    /**
     * @return Collection
     */
    public function getInfo(): Collection
    {
        return $this->client;
    }

    /**
     * @return Collection
     */
    public function getButtonActions(): Collection
    {
        return $this->client->get(self::BUTTON_ACTIONS);
    }

    /**
     * @return bool
     */
    public function isKeyboard(): bool
    {
        return $this->client->get(self::KEYBOARD);
    }

    /**
     * @return bool
     */
    public function isInlineKeyboard(): bool
    {
        return $this->client->get(self::INLINE_KEYBOARD);
    }

    /**
     * @return bool
     */
    public function isCarousel(): bool
    {
        return $this->client->get(self::CAROUSEL);
    }

    /**
     * @return int
     */
    public function getLangId(): int
    {
        return $this->client->get(self::LANG_ID);
    }
}
