<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\SimpleRequestBuilder;

/**
 * Users name cases. By default `nom`.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced
 */
class UsersNameCases extends SimpleRequestBuilder
{
    /**
     * Namely.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function namely(): static
    {
        return $this->addField('nom');
    }

    /**
     * The Parent.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function parent(): static
    {
        return $this->addField('gen');
    }

    /**
     * The Dating.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function dating(): static
    {
        return $this->addField('dat');
    }

    /**
     * The Guilty.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function guilty(): static
    {
        return $this->addField('acc');
    }

    /**
     * The Creative.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function creative(): static
    {
        return $this->addField('ins');
    }

    /**
     * The proposed.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return $this
     */
    public function proposed(): static
    {
        return $this->addField('abl');
    }
}
