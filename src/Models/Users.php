<?php

namespace Hopex\VkSdk\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Users.
 *
 * @package Hopex\VkSdk\Models
 *
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar
 * @property string $phone
 * @property bool $phone_validated
 * @property bool $additional_signup_required
 * @property bool $is_service
 * @property string $email
 * @property int $source
 * @property string $source_description
 * @property string $access_token
 * @property int $access_token_id
 * @property int $expires_in
 *
 * @method static Collection whereUserId(int $id)
 *
 * @mixin Eloquent
 */
class Users extends Model
{
    protected $table = 'vk_users';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'avatar',
        'phone',
        'phone_validated',
        'additional_signup_required',
        'is_service',
        'email',
        'source',
        'source_description',
        'access_token',
        'access_token_id',
        'expires_in',
    ];

    protected $casts = [
        'expires_in' => 'datetime',
    ];
}
