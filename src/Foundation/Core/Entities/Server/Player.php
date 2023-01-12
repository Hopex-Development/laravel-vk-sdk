<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Server;

use Carbon\Carbon;

/**
 * Class Player
 * @package Hopex\VkSdk\Foundation\Core\Entities\Server
 */
class Player
{
    /**
     * @var string
     */
    private string $team;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $kills;

    /**
     * @var int
     */
    private int $deaths;

    /**
     * @var bool
     */
    private bool $mute;

    /**
     * @var Carbon
     */
    private Carbon $time;

    public function __construct(array $player)
    {
        $team = '4NO TEAM';
        switch ($player['team']) {
            case '1':
                $team = '3SPEC';
                break;
            case '2':
                $team = '2T';
                break;
            case '3':
                $team = '1CT';
                break;
        }

        $this->setTeam($team);
        $this->setName($player['name']);
        $this->setKills($player['kills']);
        $this->setDeaths($player['deaths']);
        $this->setMute(isset($player['mute']));
        $this->setTime($player['time']);
    }

    /**
     * @return string
     */
    public function getTeam(): string
    {
        return $this->team;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getKills(): int
    {
        return $this->kills;
    }

    /**
     * @return int
     */
    public function getDeaths(): int
    {
        return $this->deaths;
    }

    /**
     * @return bool
     */
    public function isMute(): bool
    {
        return $this->mute;
    }

    /**
     * @param string|null $format
     * @return Carbon|string
     */
    public function getTime(string $format = null): Carbon|string
    {
        return $format ? $this->time->format($format) : $this->time;
    }

    /**
     * @param string $team
     */
    private function setTeam(string $team): void
    {
        $this->team = $team;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $kills
     */
    private function setKills(int $kills): void
    {
        $this->kills = $kills;
    }

    /**
     * @param int $deaths
     */
    private function setDeaths(int $deaths): void
    {
        $this->deaths = $deaths;
    }

    /**
     * @param bool $mute
     */
    private function setMute(bool $mute): void
    {
        $this->mute = $mute;
    }

    /**
     * @param int $time
     */
    private function setTime(int $time): void
    {
        $this->time = new Carbon($time);
    }
}
