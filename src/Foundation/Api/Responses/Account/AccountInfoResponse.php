<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Account;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Api\Responses\Response;
use ReflectionClass;
use ReflectionProperty;
use Throwable;

/**
 * Account info response.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Account
 *
 * @link    https://dev.vk.com/en/method/account.getInfo#Result Result
 */
class AccountInfoResponse extends Response
{
    private ?bool $twoFaRequired = null;

    private ?string $country = null;

    private ?bool $httpsRequired = null;

    private ?int $intro = null;

    private ?int $lang = null;

    private ?bool $noWallReplies = null;

    private ?bool $ownPostsDefault = null;

    /**
     * Account info response.
     *
     * @param array $fields
     *
     * @throws ApiException
     * @throws Throwable
     */
    public function __construct(array $fields)
    {
        parent::__construct($fields);

        $properties = (new ReflectionClass($this))->getProperties(ReflectionProperty::IS_PRIVATE);
        foreach ($this->fields as $parameter => $value) {
            $property = camel(str_replace('2', 'two_', $parameter));
            if (in_array($property, $properties)) {
                $this->{$property} = $value;
            }
        }
    }

    /**
     * Two-factor authentication is enabled. `True` if user set the "2-step verification" setting.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool|null
     */
    public function isTwoFaRequired(): ?bool
    {
        return $this->twoFaRequired;
    }

    /**
     * Country code. String code of a country identified by ip-address of the current request.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Information whether HTTPS-only is enabled. `True` if user set the "Always use secure connection" setting;
     * `False` – secure connection is not required.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool|null
     */
    public function isHttpsRequired(): ?bool
    {
        return $this->httpsRequired;
    }

    /**
     * Information whether user has been processed intro. Bit mask responsible for passing the application usage
     * tutorial.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int|null
     */
    public function getIntro(): ?int
    {
        return $this->intro;
    }

    /**
     * Language ID. Numeric identifier of user's current language.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int|null
     */
    public function getLang(): ?int
    {
        return $this->lang;
    }

    /**
     * Information whether wall comments should be hidden. `True` if user set the "Disable wall comments" setting.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool|null
     */
    public function isNoWallReplies(): ?bool
    {
        return $this->noWallReplies;
    }

    /**
     * Information whether only owners posts should be shown. `True` if user set the "Show only my posts by default"
     * setting.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool|null
     */
    public function isOwnPostsDefault(): ?bool
    {
        return $this->ownPostsDefault;
    }
}
