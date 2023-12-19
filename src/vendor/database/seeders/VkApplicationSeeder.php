<?php

namespace Database\Seeders;

use Hopex\VkSdk\Foundation\Core\Configuration\Config;
use Hopex\VkSdk\Models\Application;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Application as  ApplicationConfig;
use Illuminate\Database\Seeder;

/**
 * ApplicationSeeder.
 *
 * @package Database\Seeders
 */
class VkApplicationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Application::query()->truncate();

        foreach ((new Config())->applications()->all() as $application) {
            /**
             * @var ApplicationConfig $application
             */
            Application::factory()->create([
                'app_id' => $application->appId(),
                'secure_key' => $application->secureKey(),
                'service_access_key' => $application->serviceAccessKey(),
                'redirect_url' => $application->redirectUri(),
            ]);
        }
    }
}
