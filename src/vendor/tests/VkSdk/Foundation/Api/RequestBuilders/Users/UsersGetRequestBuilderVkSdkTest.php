<?php

namespace Tests\Unit\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder;
use Hopex\VkSdk\Facades\SimpleRequestBuilders\Users\UsersNameCases;
use PHPUnit\Framework\AssertionFailedError;
use Tests\VkSdkTestCase;

class UsersGetRequestBuilderVkSdkTest extends VkSdkTestCase
{
    /**
     * Test the name case functionality.
     *
     * @return void
     */
    public function testNameCase(): void
    {
        // Define the cases to test
        $cases = [
            'nom' => 'namely',
            'gen' => 'parent',
            'dat' => 'dating',
            'acc' => 'guilty',
            'ins' => 'creative',
            'abl' => 'proposed',
        ];

        // Create request builders
        $requestBuilder = UsersGetRequestBuilder::query();
        $simpleRequestBuilder = UsersNameCases::query();

        // Iterate over the cases
        foreach ($cases as $case => $query) {
            // Clear the fields of the request builders
            $requestBuilder = $requestBuilder->clearFields();
            $simpleRequestBuilder = $simpleRequestBuilder->clearFields();

            // Set the name case in the request builder
            $requestBuilder->nameCase($simpleRequestBuilder->{$query}());

            // Assert that the correct name case is set in the request builder
            $this->assertEquals($case, $requestBuilder->getFields()->get('name_case'));
        }
    }

    /**
     * Test the user IDs functionality.
     *
     * This function tests the user IDs functionality by asserting that the
     * IDs returned by the UsersGetRequestBuilder match the expected values.
     *
     * @throws AssertionFailedError If the IDs do not match the expected values.
     *
     * @return void
     */
    public function testUserIds(): void
    {
        // Create a new instance of UsersGetRequestBuilder and query for data.
        $requestBuilder = UsersGetRequestBuilder::query();

        // Define an anonymous function for asserting the IDs.
        $assert = function (
            \Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder $requestBuilder,
            $ids
        ) {
            // Clear the fields of the request builder.
            $requestBuilder = $requestBuilder->clearFields();

            // Set the user IDs on the request builder.
            $requestBuilder->userIds($ids);

            // Assert that the IDs match the expected values.
            $this->assertEquals($ids, $requestBuilder->getFields('user_ids')->toArray());
        };

        // Call the assert function with the request builder and an array of IDs.
        $assert($requestBuilder, [1, 2, 3]);

        // Call the assert function again with the same request builder and a different array of IDs.
        $assert($requestBuilder, ['john.smith', 'jane_johnson', 'michael73']);
    }

    /**
     * Test the function userIdsCommaList.
     *
     * @throws AssertionFailedError If the assertion fails.
     *
     * @return void
     */
    public function testUserIdsCommaList(): void
    {
        // Create a new instance of the UsersGetRequestBuilder
        $requestBuilder = UsersGetRequestBuilder::query();

        /**
         * Assert function to test the behavior of userIdsCommaList.
         *
         * @param \Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder $requestBuilder
         *        The UsersGetRequestBuilder instance.
         * @param int[]|string[]                                                           $ids
         *        An array of user IDs.
         *
         * @return void
         */
        $assert = function (
            \Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder $requestBuilder,
            array $ids
        ) {
            // Clear the fields of the request builder
            $requestBuilder = $requestBuilder->clearFields();

            // Set the user IDs comma-separated list as the fields of the request builder
            $requestBuilder->userIdsCommaList(...$ids);

            // Assert that the user IDs in the request builder match the provided IDs
            $this->assertEquals($ids, $requestBuilder->getFields('user_ids')->toArray());
        };

        // Test with an array of integer IDs
        $assert($requestBuilder, [1, 2, 3]);

        // Test with an array of string IDs
        $assert($requestBuilder, ['john.smith', 'jane_johnson', 'michael73']);
    }

    //    public function testFields()
    //    {
    //    }
}
