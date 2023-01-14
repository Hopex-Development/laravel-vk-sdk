<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Server;

use Carbon\Carbon;

/**
 * Class ServerBlock
 * @package Hopex\VkSdk\Foundation\Core\Entities\Server
 */
abstract class Block extends ServerEvent
{
    /**
     * @var string
     */
    private string $adminName;

    /**
     * @var string
     */
    private string $playerName;

    /**
     * @var string
     */
    private string $reason;

    /**
     * @var Carbon
     */
    private Carbon $time;

    public function __construct(array $event)
    {
        parent::__construct($event);

        $this->setAdminName($event['admin_name']);
        $this->setPlayerName($event['target_name']);
        $this->setReason($event['reason']);
        $this->setTime($event['duration']);
    }

    /**
     * @return string
     */
    public function getAdminName(): string
    {
        return $this->adminName;
    }

    /**
     * @return string
     */
    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @return Carbon
     */
    public function getTime(): Carbon
    {
        return $this->time;
    }

    /**
     * @param string $adminName
     */
    private function setAdminName(string $adminName): void
    {
        $this->adminName = $adminName;
    }

    /**
     * @param string $playerName
     */
    private function setPlayerName(string $playerName): void
    {
        $this->playerName = $playerName;
    }

    /**
     * @param string $reason
     */
    private function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @param int $time
     */
    private function setTime(int $time): void
    {
        $this->time = new Carbon($time);
    }
}
