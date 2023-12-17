<?php

namespace Tests\Unit\VkSdk\Helpers;

use AssertionError;
use Tests\VkSdkTestCase;

class MethodTokenTypesVkSdkTest extends VkSdkTestCase
{
    /**
     * Test the method_token_types function and assert that it returns an array.
     *
     * @return void
     */
    public function testMethodTokenTypesReturnsArray(): void
    {
        $scopeWithMethod = 'account.getInfo';
        $result = method_token_types($scopeWithMethod);

        $this->assertIsArray($result);
    }

    /**
     * A test method that returns an empty array for an invalid scope.
     *
     * @return void
     */
    public function testMethodTokenTypesReturnsEmptyArrayForInvalidScope(): void
    {
        $scopeWithMethod = 'invalidScope';
        $result = method_token_types($scopeWithMethod);

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    /**
     * Test method for `testMethodTokenTypesReturnsEmptyArrayForInvalidMethod`.
     *
     * This function tests the behavior of the `method_token_types` function when
     * an invalid method is provided as input. It verifies that the function
     * returns an empty array in this case.
     *
     * @throws AssertionError if the returned value is not an array or if it is
     *                        not empty.
     */
    public function testMethodTokenTypesReturnsEmptyArrayForInvalidMethod(): void
    {
        $scopeWithMethod = 'account.invalidMethod';
        $result = method_token_types($scopeWithMethod);

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    /**
     * Test the method token types and ensure it returns an array for a valid scope and method.
     *
     * @return void
     */
    public function testMethodTokenTypesReturnsArrayForValidScopeAndMethod(): void
    {
        $scopeWithMethod = 'users.get';
        $result = method_token_types($scopeWithMethod);

        $this->assertIsArray($result);
        $this->assertNotEmpty($result);
    }
}
