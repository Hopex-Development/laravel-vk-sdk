<?php

namespace Hopex\VkSdk\Foundation\Core\Api;

use GuzzleHttp\Exception\RequestException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Exceptions\SdkException;
use Hopex\VkSdk\Facades\Format;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Formatters\ArrayParametersRequestFormatter;
use Hopex\VkSdk\Formatters\ClearEmptiesParametersRequestFormatter;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Class Request
 * @package Hopex\VkSdk\Foundation\Core\Api
 */
class Request
{
    /**
     * @var string
     */
    private string $token;

    /**
     * @var string|float
     */
    private string|float $version;

    /**
     * @var string
     */
    private string $language;

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
    }

    /**
     * @param string $method
     * @param array $args
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function call(string $method, array $args = []): Collection
    {
        $arguments = Format::with(ClearEmptiesParametersRequestFormatter::class)
            ->with(ArrayParametersRequestFormatter::class)
            ->format($args);
        $arguments['access_token'] = $arguments['access_token'] ?? $this->token;
        $arguments['v'] = $arguments['v'] ?? $this->version;
        $arguments['lang'] = $arguments['lang'] ?? $this->language;

        try {
            $response = Http::timeout(10)->get($this->makeUrl($method), $arguments);
        } catch (RequestException $e) {
            throw new SdkException($e->getMessage(), 500);
        }

        throw_if($response->status() != 200, HttpStatusCodeException::class);
        $body = json_decode($response->body(), true);
        $body = collect(is_array($body) ? $body : []);

        if ($body->has('error')) {
            throw new ApiException(code: $body->get('error')['error_code']);
        }

        return collect($body->has('response') ? $body->get('response') : $body);
    }

//    public function upload(string $url, string $param, string $path)
//    {
//        Http::post($url);
//        try {
//            $response = $this->http_client->upload($url, $param, $path);
//        } catch (TransportRequestException $e) {
//            throw new VKClientException($e);
//        }
//
//        return $this->parseResponse($response);
//    }

    /**
     * @param string $method
     * @return string
     */
    private function makeUrl(string $method): string
    {
        return sprintf(
            '%s/%s',
            SdkConfig::api('endpoint'),
            $method
        );
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return array|string|null
     */
    public function getVersion(): array|string|null
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
}
