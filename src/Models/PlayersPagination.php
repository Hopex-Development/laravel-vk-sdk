<?php

namespace Hopex\VkSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Player
 * @package Hopex\VkSdk\Models
 */
class PlayersPagination extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'players_pagination';

    /** @var string[] */
    protected $fillable = [
        'conversation_message_id',
        'page_index',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;
}
