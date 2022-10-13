<p align="center">
    <img src="https://packages-api.hopex.ru/packages/laravel-vk-sdk/logo.png" width="100%" alt="Laravel VK API SDK Logo">
</p>

# <span style="color:#F55D5C">Laravel</span> <span style="font-size:1rem">VK API SDK</span>

<p>
    <img alt="Version Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/package">
    <img alt="VK Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/api">
    <img alt="PHP Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/php">
    <img alt="Laravel Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/laravel">
    <img alt="License Badge" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/license">
</p>

[Laravel](https://github.com/laravel/laravel) библиотека для упрощенного использования API модулей социальной сети ВКонтакте.
Предназначена для быстрого развертывания приложений-ботов, а также использования VK API в одностороннем порядке.

### Содержание
* [Приступая к работе](#Приступая к работе)
  * [Установка](#Установка)
  * [Внутренние зависимости](#Внутренние зависимости)
* [Лицензия](#license)

## Приступая к работе

### Установка
Установка пакета через [composer](https://getcomposer.org/):
```
composer require hopex/vk-api-sdk
```

#### Внутренние зависимости
Публикация зависимостей:
```
php artisan vendor:publish --provider=Hopex\VkSdk\Providers\ServiceProvider --tag=vk-sdk-config --tag=vk-sdk-lang
```

Провайдер и фасады будут автоматически зарегистрированы, однако вы можете вручную добавить их в `config/app.php`.
```php
'providers' => [
    // ...
    Hopex\VkApiSdk\Providers\VkApiSdkServiceProvider::class,
],
'aliases' => Facade::defaultAliases()->merge([
    // ...
    'VkApiSdk' => \Hopex\VkApiSdk\Facade::class,
])->toArray(),
```

# Лицензия <span style="font-size: 1rem">[MIT](https://github.com/H0pex/vk-api-sdk/LICENSE)</span>
