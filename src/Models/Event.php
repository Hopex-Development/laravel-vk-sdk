<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /** @var string  */
    protected $table = 'vk__events';

    /** @var string[]  */
    protected $fillable = [
        'group_id',
        'type',
        'event_id',
    ];
}
