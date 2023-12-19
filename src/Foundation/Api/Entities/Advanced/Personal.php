<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;
use Illuminate\Support\Collection;

/**
 * Information about fields from the section "Life position".
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#personal
 *
 * @property-read int    $political
 * @property-read int    $alcohol
 * @property-read int    $smoking
 * @property-read string $religion
 * @property-read int    $peopleMain
 * @property-read string $inspiredBy
 * @property-read array  $langs
 * @property-read int    $lifeMain
 */
class Personal extends AbstractEntity
{
    /**
     * Political preferences.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return int
     */
    public function political(): int
    {
        return $this->political ?? 0;
    }

    /**
     * Political preferences.
     * <br><br>
     * * 1 — The communists
     * * 2 — Socialists
     * * 3 — Moderately
     * * 4 — The Liberals
     * * 5 — Conservative
     * * 6 — Monarchical
     * * 7 — Ultra-conservative
     * * 8 — Indifferently
     * * 9 — Libertarians
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function politicalStr(): string
    {
        return match ($this->political) {
            1 => 'The communists',
            2 => 'Socialists',
            3 => 'Moderately',
            4 => 'The Liberals',
            5 => 'Conservative',
            6 => 'Monarchical',
            7 => 'Ultra-conservative',
            8 => 'Indifferently',
            9 => 'Libertarians',
            default => '',
        };
    }

    /**
     * Languages.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string[]
     */
    public function languageNames(): array
    {
        return $this->langs ?? [];
    }

    /**
     * Languages.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return Collection|Language[]
     */
    public function languages(): Collection|array
    {
        return collect(array_map(fn (array $language) => new Language($language), $this->langsFull ?? []));
    }

    /**
     * Worldview.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function religion(): string
    {
        return $this->religion ?? '';
    }

    /**
     * Sources of inspiration.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function inspiredBy(): string
    {
        return $this->inspiredBy ?? '';
    }

    /**
     * The main thing in people.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return int
     */
    public function peopleMain(): int
    {
        return $this->peopleMain ?? 0;
    }

    /**
     * The main thing in people.
     * <br><br>
     * * 1 — Mind and creativity
     * * 2 — Kindness and honesty
     * * 3 — Beauty and health
     * * 4 — Power and wealth
     * * 5 — Courage and perseverance
     * * 6 — Humor and vitality
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function peopleMainStr(): string
    {
        return match ($this->peopleMain) {
            1 => 'Mind and creativity',
            2 => 'Kindness and honesty',
            3 => 'Beauty and health',
            4 => 'Power and wealth',
            5 => 'Courage and perseverance',
            6 => 'Humor and vitality',
            default => '',
        };
    }

    /**
     * The most important thing in life.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return int
     */
    public function lifeMain(): int
    {
        return $this->lifeMain ?? 0;
    }

    /**
     * The most important thing in life.
     * <br><br>
     * * 1 — Family and children
     * * 2 — Career and money
     * * 3 — Entertainment and recreation
     * * 4 — Science and research
     * * 5 — Improving the world
     * * 6 — Self-development
     * * 7 — Beauty and art
     * * 8 — Fame and influence
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function lifeMainStr(): string
    {
        return match ($this->lifeMain) {
            1 => 'Family and children',
            2 => 'Career and money',
            3 => 'Entertainment and recreation',
            4 => 'Science and research',
            5 => 'Improving the world',
            6 => 'Self-development',
            7 => 'Beauty and art',
            8 => 'Fame and influence',
            default => '',
        };
    }

    /**
     * The attitude towards smoking.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return int
     */
    public function smoking(): int
    {
        return $this->smoking ?? 0;
    }

    /**
     * The attitude towards smoking.
     * <br><br>
     * * 1 — Sharply negative
     * * 2 — Negative
     * * 3 — Compromise
     * * 4 — Neutral
     * * 5 — Positive
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function smokingStr(): string
    {
        return match ($this->smoking) {
            1 => 'Sharply negative',
            2 => 'Negative',
            3 => 'Compromise',
            4 => 'Neutral',
            5 => 'Positive',
            default => '',
        };
    }

    /**
     * Attitude to alcohol.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return int
     */
    public function alcohol(): int
    {
        return $this->alcohol ?? 0;
    }

    /**
     * Attitude to alcohol.
     * <br><br>
     * * 1 — Sharply negative
     * * 2 — Negative
     * * 3 — Compromise
     * * 4 — Neutral
     * * 5 — Positive
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function alcoholStr(): string
    {
        return match ($this->alcohol) {
            1 => 'Sharply negative',
            2 => 'Negative',
            3 => 'Compromise',
            4 => 'Neutral',
            5 => 'Positive',
            default => '',
        };
    }
}
