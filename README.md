<p align="center">
    <img src="https://packages-api.hopex.ru/packages/laravel-vk-sdk/logo.png" width="100%" alt="Laravel VK API SDK Logo">
</p>

<p align="center">
    <img alt="VK" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/api">
    <img alt="PHP" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/php">
    <img alt="Laravel" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/version/laravel">
    <img alt="License" src="https://img.shields.io/endpoint?url=https://packages-api.hopex.ru/laravel-vk-sdk/badges/license">
</p>

# About
Библиотека VK API SDK разработана для фреймворка Laravel, она позволит просто использовать большинство модулей социальной сети ВКонтакте.
Мы связали сущности ВКонтакте между собой таким образом, чтобы Вы смогли быстро строить вложенные запросы.
Библиотека служит хорошим фундаментом для развертывания сложных ботов и включает в себя следующий функционал:
- Простое и быстрое подтверждение Callback сервера: маршруты уже созданы
- Обработка событий сообщества (новое сообщение, пост на стене и пр.)
- Отправка сообщений различных типов в личные чаты и беседы
- Интеграция с игровыми серверами (SourceQuery)
- Использование неограниченного количества сообществ и игровых серверов


# Installing

1. Запустите команду, используя [composer](https://getcomposer.org/):

```
composer req hopex/vk-api-sdk
```

2. Опубликуйте ресурсы:

```
php artisan vendor:publish --tag=vk-sdk-config --tag=vk-sdk-lang --tag=vk-sdk-sources
```

3. Выполните миграцию необходимых таблиц:

```
php artisan migrate
```

## License

The VK API SDK for Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
