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
use Hopex\VkSdk\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Performs query construction.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders
 */
abstract class AbstractRequestBuilder extends AbstractSimpleRequestBuilder
{
    /**
     * The method called by the API.
     *
     * @version SDK: 3
     *
     * @var string $method
     */
    protected string $method;

    /**
     * The language that should be used in the API response.
     *
     * @version SDK: 3
     *
     * @var string
     */
    private string $language;

    /**
     * The HTTP client used for API requests.
     *
     * @version SDK: 3
     *
     * @var Client
     */
    private Client $HttpClient;

    /**
     * See description for {@see AbstractRequestBuilder::query()}.
     *
     * @version SDK: 3
     *
     * @var int|null
     */
    private ?int $id;

    /**
     * Performs query construction.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     */
    final public function __construct()
    {
        parent::__construct();

        $this->HttpClient = new Client(['verify' => false]);
        $this->language = Config::api()->language();
        $this->id = null;
    }

    /**
     * Returns the method called by the API.
     *
     * @version SDK: 3
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Returns the language that should be used in the API response.
     *
     * @version SDK: 3
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Returns the ID of the entity (ID in the social network) whose access token must be used in the request.
     *
     * @version SDK: 3
     *
     * @return int|null
     */
    public function getCustomId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets the ID of the entity whose access token must be used in the request. Or return current instance.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int|null $id  The ID of the user, application, or community on the social network whose access token must
     *                      be used in building the request. There is no need to additionally specify where to look for
     *                      the identifier. The Builder will automatically determine the type of the required token
     *                      based on the method called by the API.
     *
     * @return $this
     */
    public function query(int $id = null): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Retrieves the appropriate token for the request being executed.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @throws Throwable
     * @throws AccessTokenNotFoundException If no acceptable token is found.
     *
     * @return string The acceptable token
     */
    private function getAcceptableToken(): string
    {
        # Get the acceptable token types for the method
        $acceptableTokenTypes = method_token_types($this->method);
        # Collect the existing tokens for each acceptable token type
        $existsTokens = collect();

        foreach ($acceptableTokenTypes as $acceptedTokenType) {
            $existsTokens->push(
                match ($acceptedTokenType) {
                    'user' => User::whereUserId($this->getCustomId() ?? session('user_id')[0] ?? 0)
                        ->first()?->access_token,
                    'group' => Group::whereGroupId($this->getCustomId() ?? session('group_id')[0] ?? 0)
                        ->first()?->token,
                    'service' => is_numeric($this->getCustomId())
                        ? Application::whereAppId($this->getCustomId())->first()?->service_access_key
                        : Application::first()?->service_access_key,
                }
            );
        }

        # Filter out empty tokens and get the first non-empty token
        $token = $existsTokens->filter(fn ($token) => !empty($token))->first();

        # Throw an exception if no acceptable token is found
        throw_if(
            !$token,
            AccessTokenNotFoundException::class,
            implode(' or ', $acceptableTokenTypes)
        );

        return $token;
    }

    /**
     * Returns the fields that should be used in the request.
     * Values `0` and `1` are converted to booleans.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string|null $key Key of the field to return from the request.
     *
     * @return Collection The collection of fields to be used in the request.
     */
    public function getFields(string $key = null): Collection
    {
        # Check if a specific key is provided and if it exists in the fields collection
        if ($key && $this->fields->has($key)) {
            # Explode the comma-separated string into an array, trim each field, and map them
            return collect(explode(',', $this->fields->get($key)))
                ->map(fn ($field) => trim($field))
                ->map(function ($field) {
                    # If the field is numeric, check if it is either 0 or 1
                    if (is_numeric($field)) {
                        return in_array($field, [0, 1]) ? (bool)$field : (int)$field;
                    }

                    # If the field is not numeric, return it as is
                    return $field;
                });
        }

        # If no specific key is provided or the key doesn't exist in the fields collection, return the entire fields collection
        return $this->fields;
    }

    /**
     * Executes a request to VK with an automatically selected token, version, and language.
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
        # Prepare the request fields
        $fields = $this->fields
            ->filter(fn ($field) => !empty($field))
            ->put('access_token', $this->getAcceptableToken())
            ->put('v', Config::api()->version())
            ->put('lang', $this->language);
        try {
            # Send the HTTP request to the VK API
            $response = Http::setClient($this->HttpClient)
                ->timeout(10)
                ->get(
                    url: "https://api.vk.com/method/$this->method",
                    query: $fields->toArray()
                );
            # Decode the JSON response
            $responseArray = json_decode($response->body(), true);

            # If the debug mode is enabled, dump the request and response details
            if (config('app.debug')) {
                dump([
                    'request' => [
                        'url' => "https://api.vk.com/method/$this->method",
                        'query' => $fields->toArray(),
                    ],
                    'response' => [
                        'status' => $response->status(),
                        'body' => $responseArray,
                    ],
                ]);
            }
        } catch (RequestException $e) {
            # Throw an ApiException if there is an error with the request
            throw new ApiException(message: $e->getMessage());
        }

        # Throw an HttpStatusCodeException if the response status is not 200
        throw_if($response->status() != 200, HttpStatusCodeException::class);

        # Return the response array
        return $responseArray;
    }
}
