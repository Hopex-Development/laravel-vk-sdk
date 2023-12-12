<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Facades\Config;
use Hopex\VkSdk\Models\Application;
use Hopex\VkSdk\Models\Group;
use Hopex\VkSdk\Models\Users;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Request builder.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders
 */
abstract class RequestBuilder extends SimpleRequestBuilder
{
    protected string $method;

    private string $language;

    private Client $HttpClient;

    private ?int $id;

    final public function __construct()
    {
        parent::__construct();

        $this->HttpClient = new Client(['verify' => false]);
        $this->language = Config::api()->getLanguage();
        $this->id = null;
    }

    /**
     * Sets the ID of the entity (ID in the social network) whose access token must be used in the request.
     * <br><br>
     *
     * There is no need to explicitly specify the community ID when working with the Community Callback API. The
     * community ID will be automatically entered into the session during the callback and will be used implicitly.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int|null $id The ID of the user, application, or community on the social network whose access token must
     *                     be used in building the request. There is no need to additionally specify where to look for
     *                     the identifier, the Builder will automatically determine the type of the required token
     *                     based on the method called by the API.
     *
     * @return $this
     */
    public function query(int $id = null): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @throws Throwable
     * @throws AccessTokenNotFoundException
     *
     * @return string
     */
    private function getAcceptableToken(): string
    {
        $acceptableTokenTypes = method_token_types($this->method);
        $existsTokens = collect();

        foreach ($acceptableTokenTypes as $acceptedTokenType) {
            $existsTokens->push(
                match ($acceptedTokenType) {
                    'user' => Users::whereUserId($this->id ?? session('user_id')[0] ?? 0)
                        ->first()->access_token ?? null,
                    'group' => Group::whereGroupId($this->id ?? session('group_id')[0] ?? 0)
                        ->first()->token ?? null,
                    'service' => $this->id
                        ? Application::first()->service_access_key ?? null
                        : Application::whereAppId($this->id)->first()->service_access_key ?? null,
                }
            );
        }

        $token = $existsTokens->filter(fn($token) => !empty($token))->first();

        throw_if(
            !$token,
            AccessTokenNotFoundException::class,
            implode(' or ', $acceptableTokenTypes)
        );

        return $token;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @throws Throwable
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     *
     * @return array
     */
    final public function execute(): array
    {
        $fields = $this->fields
            ->filter(fn($field) => !empty($field))
            ->put('access_token', $this->getAcceptableToken())
            ->put('v', Config::api()->getVersion())
            ->put('lang', $this->language);

        try {
//            dump($fields->toArray());
            $response = Http::setClient($this->HttpClient)
                ->timeout(10)
                ->get(
                    url: "https://api.vk.com/method/$this->method",
                    query: $fields->toArray()
                );
        } catch (RequestException $e) {
            throw new ApiException(message: $e->getMessage());
        }

        throw_if($response->status() != 200, HttpStatusCodeException::class);

        return data_get(json_decode($response->body(), true), 'response', []);
    }
}
