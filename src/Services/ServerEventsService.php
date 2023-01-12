<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Exceptions\Server\UnknownServerEntityException;
use Hopex\VkSdk\Exceptions\Server\UnknownServerException;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Ban;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Message;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Mute;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Statistics;
use Hopex\VkSdk\Foundation\Core\Logging\ServerLogger;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class ServerEventsService
 * @package Hopex\VkSdk\Services
 */
class ServerEventsService extends ServerLogger
{
    /** @var string */
    private const SUCCESS = 'ok';

    /** @var Request */
    public Request $request;

    /** @var Collection */
    private Collection $entities;

    /**
     * CallbackEventsService constructor.
     * @param Request $request
     * @throws Throwable
     */
    public function __construct(Request $request)
    {
        parent::__construct();

        $this->entities = new Collection([
            'server_mute_new' => Mute::class,
            'server_ban_new' => Ban::class,
            'server_statistic' => Statistics::class,
            'server_message_new' => Message::class,
        ]);

        $this->request = $request;
    }

    /**
     * @return string
     * @throws UnknownServerEntityException
     * @throws Throwable
     */
    public function divide(): string
    {
        $handler = SdkConfig::servers(
            $this->request->json('server_ip'),
            $this->request->json('server_port'),
            'requests_handler'
        );
        throw_if(!$handler, UnknownServerException::class);
        call_user_func(
            [new ($handler), $this->request->json('type')],
            $this->selectEntityByRequest()
        );

        return self::SUCCESS;
    }

    /**
     * @return mixed
     * @throws UnknownServerEntityException
     */
    private function selectEntityByRequest(): mixed
    {
        $entityType = $this->request->json('type');
        $entityItems = array_merge(
            $this->request->get('object'),
            $this->request->only([
                'server_ip',
                'server_port',
                'type'
            ])
        );

        if (!$this->entities->has($entityType)) {
            throw new UnknownServerEntityException();
        }

        return new ($this->entities->get($entityType))($entityItems);
    }
}
