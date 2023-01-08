<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Server;

use Illuminate\Support\Collection;

/**
 * Class Statistics
 * @package Hopex\VkSdk\Foundation\Core\Entities\Server
 */
class Statistics extends ServerEvent
{
    /**
     * @var string
     */
    private string $map;

    /**
     * @var Collection
     */
    private Collection $players;

    /**
     * @var int
     */
    private int $bots;

    public function __construct(array $event)
    {
        $this->setMap($event['map']);
        $this->setPlayers($event['players']);
        $this->setBots($event['bots']);

        parent::__construct($event);
    }

    /**
     * @return string
     */
    public function getMap(): string
    {
        return $this->map;
    }

    /**
     * @return Collection
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    /**
     * @return int
     */
    public function getPlayersCount(): int
    {
        return count($this->players);
    }

    /**
     * @return int
     */
    public function getBots(): int
    {
        return $this->bots;
    }

    /**
     * @param string $map
     */
    private function setMap(string $map): void
    {
        $this->map = $map;
    }

    /**
     * @param array $players
     */
    private function setPlayers(array $players): void
    {
        $this->players = collect($players)->map(function ($player) {
            return new Player($player);
        });
    }

    /**
     * @param int $bots
     */
    private function setBots(int $bots): void
    {
        $this->bots = $bots;
    }
}
