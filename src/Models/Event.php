<?php

namespace Hopex\VkSdk\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Events table.
 *
 * @property int group_id
 * @property string type
 * @property string event_id
 *
 * @method static whereGroupId(int $id)
 * @method static whereType(string $type)
 * @method static whereEventId(string $eventId)
 * @method static updateOrCreate(array $only)
 *
 * @mixin Eloquent
 *
 * @package Hopex\VkSdk\Models
 */
class Event extends Model
{
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected $table = 'vk_events';

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'group_id',
        'type',
        'event_id',
    ];
}
