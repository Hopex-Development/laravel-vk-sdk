<?php

namespace Database\Factories;

use Hopex\VkSdk\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * VkApplicationFactory.
 *
 * @package Database\Factories
 */
class VkApplicationFactory extends Factory
{
    protected $model = Application::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app_id' => fake()->unique()->randomNumber([1, 10000], true),
            'secure_key' => fake()->unique()->uuid(),
            'service_access_key' => fake()->unique()->uuid(),
            'redirect_url' => fake()->url(),
        ];
    }
}
