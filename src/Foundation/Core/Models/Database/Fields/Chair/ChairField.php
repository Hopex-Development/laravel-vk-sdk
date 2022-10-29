<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Chair;

use Illuminate\Support\Collection;

/**
 * Class ChairField
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Chair
 */
class ChairField
{
    public const ID = 'id';
    public const TITLE = 'title';

    /**
     * @var Collection
     */
    private Collection $chair;

    /**
     * CityField constructor.
     * @param array|Collection $chair
     */
    public function __construct(array|Collection $chair)
    {
        if ($chair instanceof Collection) {
            $this->chair = $chair;
        } else {
            $this->chair = collect($chair);
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->chair->get(self::ID);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->chair->get(self::TITLE);
    }
}
