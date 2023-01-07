<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Server
 * @package Hopex\VkSdk\Models
 */
class Server extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'ip',
        'port',
        'rcon_password',
    ];
}
