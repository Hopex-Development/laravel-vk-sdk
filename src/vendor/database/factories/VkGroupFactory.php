<?php

namespace Database\Factories;

use Hopex\VkSdk\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * VkGroupFactory.
 *
 * @package Database\Factories
 */
class VkGroupFactory extends Factory
{
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_id' => fake()->unique()->randomNumber([1, 10000], true),
            'confirmation' => fake()->unique()->word(),
            'token' => fake()->unique()->uuid(),
            'secret_code' => fake()->unique()->word(),
            'need_secret_verify' => fake()->boolean(),
            'allow_retry_events' => fake()->boolean(),
            'callback_events_handler' => '',
            'long_pool_events_handler' => '',
        ];
    }
}
