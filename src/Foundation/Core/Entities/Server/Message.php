<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Server;

/**
 * Class ServerMessage
 * @package Hopex\VkSdk\Foundation\Core\Entities\Server
 */
class Message extends ServerEvent
{
    /**
     * @var string
     */
    private string $player;

    /**
     * @var string
     */
    private string $text;

    public function __construct(array $event)
    {
        $this->setPlayer($event['name']);
        $this->setText($event['message']);

        parent::__construct($event);
    }

    /**
     * @return string
     */
    public function getPlayer(): string
    {
        return $this->player;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $player
     */
    private function setPlayer(string $player): void
    {
        $this->player = $player;
    }

    /**
     * @param string $text
     */
    private function setText(string $text): void
    {
        $this->text = $text;
    }
}
