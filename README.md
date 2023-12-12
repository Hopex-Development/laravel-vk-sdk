<p align="center">
    <img src="https://packages-api.hopex.ru/storage/vk-api-sdk/banner.png" width="100%" alt="Laravel VK API SDK Logo">
</p>

<p align="center">
    <img alt="Downloads" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/packagist/hopex/downloads">
    <img alt="Stars" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/packagist/hopex/stars">
    <img alt="Laravel" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/version/laravel">
    <img alt="PHP" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/version/php">
    <img alt="License" src="https://packages-api.hopex.ru/api/laravel-vk-sdk/license">
</p>

# About
The VK API SDK library is developed for the Laravel framework, it will allow you to use most of the modules of the VKontakte social network simply.
We have linked VKontakte entities to each other in such a way that you can quickly build the subqueries.
The library provides a good foundation for deploying complex bots and includes the following functionality:
- Simple and quick confirmation of the Callback server: routes have already been created
- Processing community events (new message, wall post, etc.)
- Sending messages of various types to personal and group chats
- Adding censorship to messages and player names sent from the game server
- Integration with game servers (SourceQuery)
- The use of an unlimited number of communities and game servers


# Installing

1. Run the command using [composer](https://getcomposer.org/):

```
composer req hopex/vk-api-sdk
```

2. Publish resources:

```
php artisan vendor:publish --tag=vk-sdk-config --tag=vk-sdk-lang --tag=vk-sdk-sources --tag=vk-sdk-console --tag=vk-sdk-database --force
```

3. Migrate the necessary tables:

```
php artisan migrate
```

4. Make endpoints of your routes for SourceMod plugin (optional):

```
php artisan endpoint:generate --host https://domain.com
```

## License

The VK API SDK for Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


pa db:seed --class=VkApplicationSeeder