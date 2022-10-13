<?php /** @noinspection GrazieInspection */

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
        'entry' => 'connect',
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
        'endpoint'  => 'https://api.vk.com/method/',
        'version'   => '5.131',
    ],

    'groups' => [
        '84942932' => [
            'confirmation' => '28ec36c3',
            'token' => 'vk1.a.-U95XUjpt2OxcSqyPydks69FwG1fAHxY5CF7pUFC-d0oG9bY4ld2HO23VQCBF8xbrS2gLDE2QXyLSH6jsCaGw5lGc2M-n8aAbwToCGLp97LiS5Lf3Ha1En3LQshkdLlZkqKS80METKyr_3nSIBF4GJLAxZNvnSd12hXe3PYZAG0oTIkVPgdguVrbs8EEcAGv',
            'secret' => [
                'code' => '745cc77d276cf36c694e',
                'verify' => true,
            ],
            'events' => \App\VK\Chat::class
        ],
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
                'name' => 'vk-sdk',
                'driver' => 'daily',
                'path' => storage_path('logs/vk-sdk/exceptions.log'),
                'level' => env('LOG_LEVEL', 'debug'),
                'permissions' => 0755,
                'locking' => true,
                'days' => 30,
                'tap' => \Hopex\VkSdk\Formatters\JsonLogFormatter::class,
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Базовые коды ошибок
    |--------------------------------------------------------------------------
    */

    'errors' => [
        '1' => \Hopex\VkSdk\Exceptions\Api\Common\UnknownException::class,
        '2' => \Hopex\VkSdk\Exceptions\Api\Common\DisabledException::class,
        '3' => \Hopex\VkSdk\Exceptions\Api\Methods\MethodException::class,
        '4' => \Hopex\VkSdk\Exceptions\Api\Common\SignatureException::class,
        '5' => \Hopex\VkSdk\Exceptions\Api\Auth\AuthException::class,
        '6' => \Hopex\VkSdk\Exceptions\Api\Common\TooManyException::class,
        '7' => \Hopex\VkSdk\Exceptions\Api\Common\PermissionException::class,
        '8' => \Hopex\VkSdk\Exceptions\Api\Common\RequestException::class,
        '9' => \Hopex\VkSdk\Exceptions\Api\Common\FloodException::class,
        '10' => \Hopex\VkSdk\Exceptions\Api\Common\ServerException::class,
        '11' => \Hopex\VkSdk\Exceptions\Api\Common\EnabledInTestException::class,
        '14' => \Hopex\VkSdk\Exceptions\Api\Common\CaptchaException::class,
        '15' => \Hopex\VkSdk\Exceptions\Api\Accesses\AccessException::class,
        '16' => \Hopex\VkSdk\Exceptions\Api\Auth\AuthHttpsException::class,
        '17' => \Hopex\VkSdk\Exceptions\Api\Auth\AuthValidationException::class,
        '18' => \Hopex\VkSdk\Exceptions\Api\Common\UserDeletedException::class,
        '20' => \Hopex\VkSdk\Exceptions\Api\Methods\MethodPermissionException::class,
        '21' => \Hopex\VkSdk\Exceptions\Api\Methods\MethodAdsException::class,
        '23' => \Hopex\VkSdk\Exceptions\Api\Methods\MethodDisabledException::class,
        '24' => \Hopex\VkSdk\Exceptions\Api\Confirmation\NeedConfirmationException::class,
        '25' => \Hopex\VkSdk\Exceptions\Api\Confirmation\NeedTokenConfirmationException::class,
        '27' => \Hopex\VkSdk\Exceptions\Api\Groups\GroupAuthException::class,
        '28' => \Hopex\VkSdk\Exceptions\Api\Apps\AppAuthException::class,
        '29' => \Hopex\VkSdk\Exceptions\Api\Common\RateLimitException::class,
        '30' => \Hopex\VkSdk\Exceptions\Api\Common\PrivateProfileException::class,
        '100' => \Hopex\VkSdk\Exceptions\Api\Parameters\ParamException::class,
        '101' => \Hopex\VkSdk\Exceptions\Api\Parameters\ParamApiIdException::class,
        '113' => \Hopex\VkSdk\Exceptions\Api\Parameters\ParamUserIdException::class,
        '150' => \Hopex\VkSdk\Exceptions\Api\Parameters\ParamTimestampException::class,
        '200' => \Hopex\VkSdk\Exceptions\Api\Accesses\AccessAlbumException::class,
        '201' => \Hopex\VkSdk\Exceptions\Api\Accesses\AccessAudioException::class,
        '203' => \Hopex\VkSdk\Exceptions\Api\Accesses\AccessGroupException::class,
        '300' => \Hopex\VkSdk\Exceptions\Api\Albums\AlbumFullException::class,
        '500' => \Hopex\VkSdk\Exceptions\Api\Votes\VotesPermissionException::class,
        '600' => \Hopex\VkSdk\Exceptions\Api\Ads\AdsPermissionException::class,
        '603' => \Hopex\VkSdk\Exceptions\Api\Ads\AdsSpecificException::class,
    ]
];
