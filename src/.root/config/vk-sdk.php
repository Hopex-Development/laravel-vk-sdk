<?php

use App\VK\Kult\EventsMapper;
use App\VK\Kult\RequestsMapper;
use Hopex\VkSdk\Formatters\JsonLogFormatter;

return [

    /*
    |--------------------------------------------------------------------------
    | Маршрутизация
    |--------------------------------------------------------------------------
    | ENTRY
    |    URI адрес, определяющий первоначальный маршрут в приложении для всех
    |    входящих запросов API.
    |--------------------------------------------------------------------------
    */

    'routes' => [
        'group' => 'callbacks',
        'server' => 'requests',
    ],

    /*
    |--------------------------------------------------------------------------
    | Параметры исходящих подключений
    |--------------------------------------------------------------------------
    | COMMON
    |    Базовые настройки API.
    |
    | COMMON.ENDPOINT
    |    Базовая часть адреса для отправки API запроса на сторону
    |    ВКонтакте.
    |
    | COMMON.VERSION
    |    Используемая версия VK API. Использование этого параметра
    |    применяет некоторые изменения в формате ответа различных методов.
    |--------------------------------------------------------------------------
    | GROUP
    |    Политика конфигурации для групп.
    |
    | GROUP.CONFIRMATION
    |    Код, необходимый для привязки и дальнейшего получения уведомлений.
    |
    | GROUP.SECRET
    |    Произвольная строка до 50 символов, может включать латинские буквы и
    |    цифры. Заданный вами секретный ключ будет передаваться с каждым
    |    уведомлением от сервера в отдельном поле <secret>. Это позволит вам
    |    достоверно определять, что уведомление пришло именно от сервера ВК.
    |    Чтобы исключить возможность подделки запросов, пожалуйста, не
    |    публикуйте значение секретного ключа в открытом доступе.
    |
    | GROUP.TOKEN
    |    Ключ доступа группы.
    |
    | GROUP.SECURE
    |    Определяет необходимость проверки поля секретного ключа для всех
    |    входящих запросов сервера, выполненных от лица текущей группы.
    |--------------------------------------------------------------------------
    */

    // TODO: исправить документацию для api и groups
    'api' => [
        'auth' => 'https://oauth.vk.com',
        'endpoint' => 'https://api.vk.com/method',
        'version' => '5.131',
    ],

    'replacement' => [
        'replace_to' => '(🚫)',
        'forbidden' => [
            '(@)',
            '(\*)',
            '(http)',
            '(\.com)',
            '(\.de)',
            '(\.net)',
            '(\.uk)',
            '(\.cn)',
            '(\.org)',
            '(\.info)',
            '(\.nl)',
            '(\.eu)',
            '(\.ru)',
            '(\.co\.uk)',
            '(\.me\.uk)',
            '(\.org\.uk)',
            '(\.sch\.uk)',
        ],
    ],

    'groups' => [
        205402271 => [
            'description' => 'Kult Game Project',
            'confirmation' => '6eaef7a9',
            'token' => 'vk1.a.j-mrHaaBmC8Uq_GlAqwVjG2UALgWLYFqkq-Wgr2bGlO7LHZmT5km24yi2EZU2op1sAD4NHcFq2_KPo3IEwZCvMlywO6whuI8i00kFXBTM-w0lI1RVD534whyOPLZMoCoB2JMH12no5EC7dMUa3Jd63uc1DOlCKTV8GJQi2DG2piDsv_OfC3nrKBy0DQa3q-tr6Ei6HIZ-OW5EZaOw37nNg',
            'secret' => [
                'code' => 'ymUrvxeTHfUyRtdK',
                'verify' => true,
            ],
            'chats' => [
                'events_handler' => EventsMapper::class,
                'prod_peer_id' => 2000000001,
                'dev_peer_id' => 2000000002,
                'players_max_pagination' => 15,
                'allow_retry_events' => false,
                'moderators' => [
                    244036703,
                    312568800,
                ],
            ],
            'target_server' => '46.3.223.76:27015',
        ],
    ],

    'servers' => [
        '46-3-223-76-27015' => [
            'target_group_id' => 205402271,
            'rcon_password' => 'Nr8v6uxuCL8cA5NOx43cypz0DuaqCGP',
            'requests_handler' => RequestsMapper::class,
        ],
    ],

    'auth_app' => [
        'token' => 'b89c4892b89c4892b89c4892aeb8e5dc9fbb89cb89c4892d9c7b14801fb3358d6dcd092',
        'secret' => 'OaQA1ddYuF2PLGAGKOjd',
    ],

    'source-bans' => [
        'connection' => [
            'driver' => 'mysql',
            'host' => 'server239.hosting.reg.ru',
            'port' => '3306',
            'database' => 'u1876002_ma',
            'username' => 'u1876002_ma',
            'password' => 'u1876002_ma',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix_tables' => 'sb_',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Логирование
    |--------------------------------------------------------------------------
    | ENABLED
    |    Определяет необходимость ведения логирования.
    |--------------------------------------------------------------------------
    | CHANNELS
    |    Настраиваемые каналы для ведения логирования.
    |
    | CHANNELS.EXCEPTION
    |    Канал логирования исключений SDK.
    |--------------------------------------------------------------------------
    */

    'logging' => [
        'enabled' => true,
        'channels' => [
            'exception' => [
                'name' => 'vk-sdk-exception',
                'driver' => 'daily',
                'path' => storage_path('logs/vk-sdk/exceptions.log'),
                'level' => env('LOG_LEVEL', 'debug'),
                'permissions' => 0755,
                'locking' => true,
                'days' => 30,
                'tap' => JsonLogFormatter::class,
            ],
            'info' => [
                'name' => 'vk-sdk-infos',
                'driver' => 'daily',
                'path' => storage_path('logs/vk-sdk/infos.log'),
                'level' => env('LOG_LEVEL', 'debug'),
                'permissions' => 0755,
                'locking' => true,
                'days' => 30,
                'tap' => JsonLogFormatter::class,
            ],
            'source' => [
                'name' => 'vk-sdk-sources',
                'driver' => 'daily',
                'path' => storage_path('logs/vk-sdk/sources.log'),
                'level' => env('LOG_LEVEL', 'debug'),
                'permissions' => 0755,
                'locking' => true,
                'days' => 30,
                'tap' => JsonLogFormatter::class,
            ],
            'server' => [
                'name' => 'vk-sdk-server',
                'driver' => 'daily',
                'path' => storage_path('logs/vk-sdk/server.log'),
                'level' => env('LOG_LEVEL', 'debug'),
                'permissions' => 0755,
                'locking' => true,
                'days' => 30,
                'tap' => JsonLogFormatter::class,
            ],
        ],
    ],
];
