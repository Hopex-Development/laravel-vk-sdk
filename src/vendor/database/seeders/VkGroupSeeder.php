<?php

namespace Database\Seeders;

use Hopex\VkSdk\Foundation\Core\Configuration\Config;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Group as  GroupConfig;
use Hopex\VkSdk\Models\Group;
use Illuminate\Database\Seeder;

/**
 * VkGroupSeeder.
 *
 * @package Database\Seeders
 */
class VkGroupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Group::query()->truncate();

        foreach ((new Config())->groups()->all() as $group) {
            /**
             * @var GroupConfig $group
             */
            Group::factory()->create([
                'group_id' => $group->groupId(),
                'confirmation' => $group->confirmation(),
                'token' => $group->token(),
                'secret_code' => $group->secretCode(),
                'need_secret_verify' => $group->needSecretVerify(),
                'allow_retry_events' => $group->allowRetryEvents(),
                'callback_events_handler' => $group->callbackEventsHandler(),
                'long_pool_events_handler' => $group->longPoolEventsHandler(),
            ]);
        }
    }
}
