<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums\ReportType;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUserId;

/**
 * UsersReportRequestBuilder.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users
 *
 * @link    https://dev.vk.com/en/method/users.report
 */
class UsersReportRequestBuilder extends AbstractRequestBuilder
{
    use HasUserId;

    /**
     * {@inheritdoc}
     */
    protected string $method = 'users.report';

    /**
     * The type of complaint may take the following meanings.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @param ReportType $type
     *
     * @return static
     */
    public function type(ReportType $type): static
    {
        return $this->addField([
            __FUNCTION__ => $type->value,
        ]);
    }

    /**
     * Pornography type of complaint.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @return $this
     */
    public function typePorn(): static
    {
        return $this->type(ReportType::PORN);
    }

    /**
     * Spam type of complaint.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @return $this
     */
    public function typeSpam(): static
    {
        return $this->type(ReportType::SPAM);
    }

    /**
     * Insult type of complaint.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @return $this
     */
    public function typeInsult(): static
    {
        return $this->type(ReportType::INSULT);
    }

    /**
     * Advertising type of complaint.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @return $this
     */
    public function typeAdvertisement(): static
    {
        return $this->type(ReportType::ADVERTISEMENT);
    }

    /**
     * A complaint against the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @param string $comment
     *
     * @return static
     */
    public function comment(string $comment): static
    {
        return $this->addField([
            __FUNCTION__ => $comment,
        ]);
    }
}
