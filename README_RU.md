<p align="center">
    <img src="https://packages-api.hopex.ru/packages/laravel-vk-sdk/logo.png" width="100%" alt="Laravel VK API SDK Logo">
</p>

<p align="center">
    <img alt="Version Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/package">
    <img alt="VK Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/api">
    <img alt="PHP Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/php">
    <img alt="Laravel Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/laravel">
    <img alt="License Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/license">
</p>

> #### You can read the [English version](https://github.com/H0pex/laravel-vk-sdk/README_EN)

[Laravel](https://github.com/laravel/laravel) библиотека для упрощенного использования API модулей социальной сети
ВКонтакте.
Предназначена для быстрого развертывания приложений-ботов, а также использования VK API в одностороннем порядке.

# Установка

Осуществить установку можно используя [composer](https://getcomposer.org/):

```
composer require hopex/vk-api-sdk
```

Публикация необходимых ресурсов:

```
php artisan vendor:publish --tag=vk-sdk-config --tag=vk-sdk-lang
```

Провайдер и фасады будут автоматически зарегистрированы, однако вы можете вручную добавить их в `config/app.php`.

```php
'providers' => [
    // ...
    Hopex\VkApiSdk\Providers\ServiceProvider::class,
],
'aliases' => Facade::defaultAliases()->merge([
    // ...
    'VkApi' => \Hopex\VkSdk\Foundation\Core\Api\Client::class,
    'Format' => \Hopex\VkSdk\Foundation\Format::class,
    'SdkConfig' => \Hopex\VkSdk\Foundation\SdkConfig::class,
])->toArray(),
```

# Лицензия

[MIT License](https://github.com/H0pex/vk-api-sdk/LICENSE)
