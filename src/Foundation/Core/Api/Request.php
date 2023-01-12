<?php

namespace Hopex\VkSdk\Foundation\Core\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Facades\Format;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Formatters\Request\ArrayParametersRequestFormatter;
use Hopex\VkSdk\Formatters\Request\ClearEmptiesParametersRequestFormatter;
use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Class Request
 * @package Hopex\VkSdk\Foundation\Core\Api
 */
abstract class Request
{
    /** @var string */
    private string $token;

    /** @var string|float|array|null */
    private string|float|null|array $version;

    /** @var string|Repository|Application|mixed */
    private string $language;

    /** @var Client */
    private Client $HttpClient;

    /**
     * @param string $token
     * @param string|float|null $version
     * @param string|null $language
     */
    public function __construct(string $token, string|float $version = null, string $language = null)
    {
        $this->token = $token;
        $this->version = $version ?? SdkConfig::api('version');
        $this->language = $language ?? config('app.locale');
        $this->HttpClient = new Client(['verify' => false]);
    }

    /**
     * @param string $method
     * @param array $args
     * @return Collection
     * @throws Throwable
     * @throws ApiException
     */
    public function call(string $method, array $args = []): Collection
    {
        $arguments = Format::with(ClearEmptiesParametersRequestFormatter::class)
            ->with(ArrayParametersRequestFormatter::class)
            ->format($args);
        $arguments['access_token'] = $arguments['access_token'] ?? $this->getToken();
        $arguments['v'] = $arguments['v'] ?? $this->getVersion();
        $arguments['lang'] = $arguments['lang'] ?? $this->getLanguage();

        try {
            $response = Http::setClient($this->HttpClient)
                ->timeout(10)
                ->get($this->makeUrl($method), $arguments);
        } catch (RequestException $e) {
            throw new ApiException();
        }

        throw_if($response->status() != 200, HttpStatusCodeException::class);
        $body = json_decode($response->body(), true);
        $body = collect(is_array($body) ? $body : []);

        if ($body->has('error')) {
            throw new ApiException((int)$body->get('error')['error_code']);
        }

        return collect($body->has('response') ? $body->get('response') : $body);
    }

    /**
     * @return string
     */
    private function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return array|string|null
     */
    private function getVersion(): array|string|null
    {
        return $this->version;
    }

    /**
     * @return string
     */
    private function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $method
     * @return string
     */
    private function makeUrl(string $method): string
    {
        return sprintf('%s/%s', SdkConfig::api('endpoint'), $method);
    }
}
