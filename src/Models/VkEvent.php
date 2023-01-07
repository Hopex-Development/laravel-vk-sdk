<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VkEvent
 * @package Hopex\VkSdk\Models
 */
class VkEvent extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'group_id',
        'type',
        'event_id',
    ];
}
