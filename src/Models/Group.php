<?php

namespace Hopex\VkSdk\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\VkGroupFactory;
use Hopex\VkSdk\Models\Traits\HasCombineCalling;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Group.
 *
 * @package Hopex\VkSdk\Models
 *
 * @property int    $group_id
 * @property string $confirmation
 * @property string $token
 * @property string $secret_code
 * @property bool   $need_secret_verify
 * @property bool   $allow_retry_events
 * @property string $callback_events_handler
 * @property string $long_pool_events_handler
 *
 * @method static \Illuminate\Database\Eloquent\Collection whereGroupId(int $id)
 *
 * @method int groupId()
 * @method string confirmation()
 * @method string token()
 * @method string secretCode()
 * @method bool needSecretVerify()
 * @method bool allowRetryEvents()
 * @method string callbackEventsHandler()
 * @method string longPoolEventsHandler()
 *
 * @mixin Eloquent
 */
class Group extends Model
{
    use HasFactory;
    use HasCombineCalling;

    protected $table = 'vk_groups';

    protected $fillable = [
        'group_id',
        'confirmation',
        'token',
        'secret_code',
        'need_secret_verify',
        'allow_retry_events',
        'callback_events_handler',
        'long_pool_events_handler',
    ];

    protected $casts = [
        'need_secret_verify' => 'bool',
        'allow_retry_events' => 'bool',
    ];

    /**
     * @inheritdoc
     */
    public static function factory($count = null, ?Collection $state = null): VkGroupFactory
    {
        return new VkGroupFactory($count, $state);
    }
}
