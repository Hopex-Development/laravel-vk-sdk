<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServerMessage
 * @package Hopex\VkSdk\Models
 */
class ServerMessage extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'server',
        'sender',
        'text',
        'is_server_sending',
    ];
}
