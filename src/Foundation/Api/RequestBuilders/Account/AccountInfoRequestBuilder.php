<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Account;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;

/**
 * Account info request builder.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Account
 *
 * @link    https://dev.vk.com/en/method/account.getInfo
 */
class AccountInfoRequestBuilder extends RequestBuilder
{
    protected string $method = 'account.getInfo';

    /**
     * User country.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @return $this
     */
    public function country(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * Is "HTTPS only" option enabled.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @return $this
     */
    public function httpsRequired(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * Is "Show my posts only" option is enabled.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @return $this
     */
    public function ownPostsDefault(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * Are wall replies disabled or not.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @return $this
     */
    public function noWallReplies(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * Is intro passed by user or not.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @return $this
     */
    public function intro(): static
    {
        return $this->addField(__FUNCTION__);
    }

    /**
     * User language.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @return $this
     */
    public function lang(): static
    {
        return $this->addField(__FUNCTION__);
    }
}
