<?php

namespace Hopex\VkSdk\Models;

use Hopex\VkSdk\Exceptions\Callback\UnknownGroupIdException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Application
 * @package Hopex\VkSdk\Models
 */
class Application extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'group_id',
        'is_production',
    ];

    /**
     * @param Builder $builder
     * @param int $groupId
     * @return bool
     * @throws \Throwable
     */
    public function scopeIsProductionFor(Builder $builder, int $groupId): bool
    {
        $configuration = $builder->where('group_id', $groupId)->first();
        throw_if(!$configuration, UnknownGroupIdException::class);

        return $configuration->is_production;
    }

    /**
     * @param Builder $builder
     * @param int $groupId
     * @return int
     */
    public function scopeDown(Builder $builder, int $groupId): int
    {
        return $builder->update([
            'group_id' => $groupId,
            'is_production' => false
        ]);
    }

    /**
     * @param Builder $builder
     * @param int $groupId
     * @return int
     */
    public function scopeUp(Builder $builder, int $groupId): int
    {
        return $builder->update([
            'group_id' => $groupId,
            'is_production' => true
        ]);
    }
}
