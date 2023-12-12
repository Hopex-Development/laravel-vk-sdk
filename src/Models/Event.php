<?php

namespace Hopex\VkSdk\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * VkEvent.
 *
 * @package Hopex\VkSdk\Models
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
 */
class Event extends Model
{
    use HasFactory;

    protected $table = 'vk_events';

    /** @var string[] */
    protected $fillable = [
        'group_id',
        'type',
        'event_id',
    ];
}
