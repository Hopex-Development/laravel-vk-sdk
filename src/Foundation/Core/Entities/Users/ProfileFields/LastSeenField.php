<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields;

use Carbon\Carbon;
use Illuminate\Support\Collection;

/**
 * Class LastSeenField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields
 */
class LastSeenField
{
    private const PLATFORM = 'platform';
    private const TIME = 'time';

    /**
     * @var Collection
     */
    public Collection $lastSeen;

    /**
     * LastSeenField constructor.
     * @param array|Collection $lastSeen
     */
    public function __construct(array|Collection $lastSeen)
    {
        if ($lastSeen instanceof Collection) {
            $this->lastSeen = $lastSeen;
        } else {
            $this->lastSeen = collect($lastSeen);
        }
    }

    /**
     * @return int|null
     */
    public function getPlatform(): ?int
    {
        return $this->lastSeen->get(self::PLATFORM);
    }

    /**
     * @return Carbon
     */
    public function getTime(): Carbon
    {
        return new Carbon($this->lastSeen->get(self::TIME));
    }
}
