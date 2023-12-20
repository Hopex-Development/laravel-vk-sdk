<?php

use App\Social\CallbackEventsMapper;
use Hopex\VkSdk\Foundation\Core\Enums\Language;

return [
    'api' => [
        'endpoints' => [
            'auth' => 'https://oauth.vk.com',
            'methods' => 'https://api.vk.com/method',
        ],
        'version' => 5.199,
        'lang' => Language::ENGLISH,
    ],

    'groups' => [
        [
            'group_id' => 84942932,
            'confirmation' => 'b62d121a',
            'token' => 'vk1.a.53kSF2kWSB60z7ib5MZkGEd-tzn4i77jTglW1edsee-qn3mhqVx_3ct4mYbFGCrOz6SSpCy52DOeMChWHvk-3_1LUy3Wq8sdG9scZFyeHoIMLVHvJ_lgvPkb08xP_ueQs9FO0TVaCFH7_TJDO5bwoFxan1H1FxSjmAXiKRf5CeDOdSVakFJ3MHyRZWRf5RHFEjKcZbnB6aPKfo8NpQWiTw',
            'secret_code' => 'T0dReVlUMGRSZVZsVWJHaE9SMDBUbGhOR00',
            'need_secret_verify' => true,
            'allow_retry_events' => false,
            'callback_events_handler' => CallbackEventsMapper::class,
            'long_pool_events_handler' => '',
        ],
    ],

    'applications' => [
        [
            'app_id' => 51807780,
            'secure_key' => 'RUYjmyZiXN51BAlTkCut',
            'service_access_key' => '229a6411229a6411229a641159218ce2352229a229a641147f4677570760d01e359bd7c',
            'redirect_uri' => 'https://test-service-hopex.loca.lt/auth/callback',
        ],
    ],

    'logging' => [
        'tracing' => true,
        'channels' => [
            'exception' => make_log_channel('exception'),
            'info' => make_log_channel('info'),
            'source' => make_log_channel('source'),
            'server' => make_log_channel('server'),
            'callback' => make_log_channel('callback'),
        ],
    ],
];
