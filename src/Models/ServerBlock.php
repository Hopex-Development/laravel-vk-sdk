<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServerBlock
 * @package Hopex\VkSdk\Models
 */
class ServerBlock extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'server_id',
        'type',
        'player',
    ];
}
