<?php

namespace Tests\Unit\VkSdk\Foundation\Api\RequestBuilders;

use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Facades\Config;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder;
use PHPUnit\Framework\AssertionFailedError;
use Tests\VkSdkTestCase;

class RequestBuilderVkSdkTest extends VkSdkTestCase
{
    /**
     * Test the `getMethod` method of the `UsersGetRequestBuilder` class.
     *
     * This function creates an instance of the `UsersGetRequestBuilder` class and
     * calls its `getMethod` method. It then asserts that the returned value is
     * equal to the string 'users.get'.
     *
     * @throws AssertionFailedError If the returned value is not equal to 'users.get'
     */
    public function testGetMethod(): void
    {
        $builder = UsersGetRequestBuilder::query();
        $this->assertEquals('users.get', $builder->getMethod());
    }

    /**
     * Test the constructor of the class.
     *
     * @return void
     */
    public function testConstruct(): void
    {
        $this->testGetLanguage();
        $this->testGetCustomId();
    }

    /**
     * Test the getLanguage method of the UsersGetRequestBuilder class.
     *
     * @throws AssertionFailedError If the expected language does not match the actual language.
     *
     * @return void
     */
    public function testGetLanguage(): void
    {
        $builder = UsersGetRequestBuilder::query();
        $configLanguage = Config::api()->language();
        $this->assertEquals($configLanguage, $builder->getLanguage());
    }

    /**
     * Test the getCustomId method of the UsersGetRequestBuilder class.
     *
     * @return void
     */
    public function testGetCustomId(): void
    {
        $builder = UsersGetRequestBuilder::query(1);
        $this->assertEquals(1, $builder->getCustomId());
    }

    /**
     * Test the query function.
     *
     * @return void
     */
    public function testQuery(): void
    {
        $builder = UsersGetRequestBuilder::query(1);
        $this->assertEquals(1, $builder->getCustomId());
    }

    /**
     * Test the execution of the function with an invalid social entity ID.
     *
     * @return void
     */
    public function testExecuteWithInvalidSocialEntityId(): void
    {
        $builder = UsersGetRequestBuilder::query(0);
        $this->assertThrows(fn() => $builder->execute(), AccessTokenNotFoundException::class);
    }
}
