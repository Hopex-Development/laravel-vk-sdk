<p align="center">
    <img src="https://packages-api.hopex.ru/storage/vk-api-sdk/banner.png" width="100%" alt="Laravel VK API SDK Logo">
</p>

<p align="center">

[//]: # (    <img alt="Downloads" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/packagist/hopex/downloads">)
[//]: # (    <img alt="Stars" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/packagist/hopex/stars">)
    <img alt="Laravel" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/version/laravel">
    <img alt="PHP" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/version/php">
    <img alt="License" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/license">
</p>

# About

The VK API SDK library is developed for the Laravel framework, it will allow you to use most of the modules of the VK
social network simply. We have linked VK entities to each other in such a way that you can quickly build the
sub-queries. The library provides a good foundation for deploying complex bots.

## Installing

Run the command using [composer](https://getcomposer.org/):

```shell
composer req hopex/vk-api-sdk
```

Publish resources:

```shell
php artisan vendor:publish --tag=vk-sdk-config --tag=vk-sdk-lang --tag=vk-sdk-storage --tag=vk-sdk-database --force
```

Correctly fill in the published configuration, after which transfer the necessary tables and fill in the data from the
configuration:

```shell
php artisan migrate
php artisan db:seed --class=VkApplicationSeeder
```

## License

The VK API SDK for Laravel framework is open-sourced software licensed under
the [MIT license](https://opensource.org/licenses/MIT).