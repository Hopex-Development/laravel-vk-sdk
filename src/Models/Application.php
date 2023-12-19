<?php

namespace Hopex\VkSdk\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\VkApplicationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Applications table.
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
 *
 * @package Hopex\VkSdk\Models
 */
class Application extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $table = 'vk_applications';

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'app_id',
        'secure_key',
        'service_access_key',
        'redirect_url',
    ];

    /**
     * {@inheritdoc}
     */
    public static function factory($count = null, ?Collection $state = null): VkApplicationFactory
    {
        return new VkApplicationFactory($count, $state);
    }
}
