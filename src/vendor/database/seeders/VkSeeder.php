<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * VkSeeder.
 *
 * @package Database\Seeders
 */
class VkSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VkApplicationSeeder::class,
            VkGroupSeeder::class,
        ]);
    }
}
