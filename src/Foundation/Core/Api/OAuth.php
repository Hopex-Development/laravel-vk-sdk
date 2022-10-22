<?php

namespace Hopex\VkSdk\Foundation\Core\Api;

use Hopex\VkSdk\Exceptions\SdkException;
use Hopex\VkSdk\Facades\SdkConfig;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Class OAuth
 * @package Hopex\VkSdk\Foundation\Core\Api
 */
class OAuth
{
    const SERVICE = 'access_token?client_id=%s&client_secret=%s&v=%s&grant_type=client_credentials';
    const AUTHORIZE_URI     = 'authorize?client_id=%s&scope=%s&redirect_uri=%s&response_type=code&display=mobile';
//    const AUTHORIZE_URI     = 'authorize?client_id=%s&scope=%s&redirect_uri=%s&response_type=token&display=mobile';
    const TOKEN_URI         = 'access_token?client_id=%s&client_secret=%s&redirect_uri=%s&code=%s';
    const TIMEOUT           = 30;

    protected int $id;
    protected string $secret;
    protected string $scope;
    protected string $redirect;

    /**
     * @param int $id
     * @param string $secret
     * @return array|mixed
     * @throws Throwable
     */
    public static function getServiceToken(int $id, string $secret): mixed
    {
        $response = Http::timeout(self::TIMEOUT)->get(
            sprintf('%s/%s', SdkConfig::api('auth'), sprintf(self::SERVICE, $id, $secret, SdkConfig::api('version')))
        );

        throw_if(!empty($response->json('error_code')), new SdkException($response->json('error_msg'), $response->json('error_code')));
        //Config::set("apps.$id.token", $response->json('access_token'));

        return $response->json('access_token');
    }

    /**
     * @param mixed|null $code
     * @return mixed
     */
    public function getToken(mixed $code = null)
    {
        $response = Http::timeout(self::TIMEOUT)->get($this->makeAuthorizeUrl());

//        $data = collect(json_decode($response->body(), true));
        dd($this->makeAuthorizeUrl(), $response->status(), $response->body());
        if (isset($data['error'])) {
            throw self::toException($data);
        }

        if (!isset($data['access_token'])) {
            throw new VkException('The access token is not present in the API response.');
        }

        return $data['access_token'];
    }

    /**
     * @return string
     */
    private function makeAuthorizeUrl(): string
    {
        return sprintf(
            '%s/%s',
            SdkConfig::api('auth'),
            sprintf(
                self::AUTHORIZE_URI,
                $this->id,
                $this->scope,
                $this->redirect
            )
        );
    }

    /**
     * @param mixed $code
     * @return string
     */
    private function makeTokenUrl(mixed $code): string
    {
        return sprintf(
            '%s/%s',
            SdkConfig::api('auth'),
            sprintf(
                self::TOKEN_URI,
                $this->id,
                $this->scope,
                $this->redirect,
                $code
            )
        );
    }
}
