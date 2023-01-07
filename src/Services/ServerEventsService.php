<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Facades\Server;
use Illuminate\Http\Request;
use Throwable;

/**
 * Class ServerEventsService
 * @package Hopex\VkSdk\Services
 */
class ServerEventsService
{
    /** @var string */
    private const SUCCESS = 'ok';

    /** @var Request */
    public Request $request;

    /**
     * CallbackEventsService constructor.
     * @param Request $request
     * @throws Throwable
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function divide(): string
    {
        $eventType = $this->request->json('type');
        $eventObject = array_merge(
            $this->request->get('object'),
            $this->request->only(['server_ip', 'server_port'])
        );

        switch ($eventType) {
            case 'server_mute_new':
                Server::reSendMute($eventObject);
                break;
            case 'server_ban_new':
                Server::reSendBan($eventObject);
                break;
            case 'server_statistic':
                Server::reSendStatistics($eventObject);
                break;
            case 'server_message_new':
                Server::reSendMessage($eventObject);
                break;
        }

        return self::SUCCESS;
    }
}
