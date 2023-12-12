<?php

namespace Hopex\VkSdk\Models;

use Database\Factories\VkApplicationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * VkApplication.
 *
 * @package Hopex\VkSdk\Models
 *
 * @property int    $app_id
 * @property string $secure_key
 * @property string $service_access_key
 * @property string $redirect_url
 *
 * @method static Application first()
 * @method static \Illuminate\Database\Eloquent\Collection whereAppId(int $id)
 *
 * @mixin Eloquent
 */
class Application extends Model
{
    use HasFactory;

    /**
     * @inheritdoc
     */
    public static function factory($count = null, ?Collection $state = null): VkApplicationFactory
    {
        return new VkApplicationFactory($count, $state);
    }

    protected $table = 'vk_applications';

    protected $fillable = [
        'app_id',
        'secure_key',
        'service_access_key',
        'redirect_url',
    ];
}
