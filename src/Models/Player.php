<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Player
 * @package Hopex\VkSdk\Models
 */
class Player extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'social_id',
        'nick',
    ];

    /**
     * @return string
     */
    public function getMentionAttribute(): string
    {
        return "@id$this->social_id";
    }

    /**
     * @return int
     */
    public function scopePaginationPagesCount(Builder $builder, int $limit): int
    {
        $players = self::get();
        return $players->count() > $limit
            ? $players->sliding($limit)->count()
            : 1;
    }

    /**
     * @param Builder $builder
     * @param int $length
     * @param int $index
     * @return Collection
     */
    public function scopePaginateOf(Builder $builder, int $index, int $limit): Collection
    {
        $players = $builder->get();
        if (self::paginationPagesCount($limit) > 1) {
            return $players
                ->sliding($limit)
                ->offsetGet($index);
        } else {
            return $players;
        }
    }
}
