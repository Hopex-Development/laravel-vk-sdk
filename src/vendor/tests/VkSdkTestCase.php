<?php

namespace Tests;

use Database\Seeders\VkSeeder;
use Illuminate\Foundation\Testing\TestCase;

abstract class VkSdkTestCase extends TestCase
{
    use CreatesApplication;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(VkSeeder::class);
    }
}
