<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Messages;

use Carbon\Carbon;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Models\Users\UserProfileFields;
use Hopex\VkSdk\Foundation\Core\Models\Users\UserRequestFields;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class MessageFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Messages
 */
class MessageFields
{
    private const DATE                      = 'date';
    private const FROM_ID                   = 'from_id';
    private const ID                        = 'id';
    private const OUT                       = 'out';
    private const ATTACHMENTS               = 'attachments';
    private const CONVERSATION_MESSAGE_ID   = 'conversation_message_id';
    private const FORWARD_MESSAGES          = 'fwd_messages';
    private const IMPORTANT                 = 'important';
    private const IS_HIDDEN                 = 'is_hidden';
    private const PEER_ID                   = 'peer_id';
    private const RANDOM_ID                 = 'random_id';
    private const TEXT                      = 'text';

    /**
     * @var Collection
     */
    private Collection $message;

    /**
     * MessageFields constructor.
     * @param Collection $message
     */
    public function __construct(Collection $message)
    {
        $this->message = $message;
    }

    /**
     * @return Carbon
     */
    public function getDate(): Carbon
    {
        return new Carbon($this->message->get(self::DATE));
    }

    /**
     * @param string $token
     * @param array $userProfileFields
     * @return UserProfileFields
     * @throws ApiException
     * @throws Throwable
     */
    public function getSender(string $token, UserRequestFields $userRequestFields): UserProfileFields
    {
        return new UserProfileFields([]);
//        return new UserProfileFields(collect(VkApi::user($token)
//            ->get((new UserRequestFields())
//                ->setUserIds([
//                    $this->getSenderId()
//                ])
//                ->setProfileFields($userRequestFields->)
//            )->first()));
    }

    /**
     * @return int
     */
    public function getSenderId(): int
    {
        return $this->message->get(self::FROM_ID);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->message->get(self::ID);
    }

    /**
     * @return int
     */
    public function getOut(): int
    {
        return $this->message->get(self::OUT);
    }

    /**
     * @return array
     */
    public function getAttachments(): array
    {
        // TODO: добавить сущность
        return $this->message->get(self::ATTACHMENTS);
    }

    /**
     * @return int
     */
    public function getConversationMessageId(): int
    {
        return $this->message->get(self::CONVERSATION_MESSAGE_ID);
    }

    /**
     * @return array
     */
    public function getForwardMessages(): array
    {
        return $this->message->get(self::FORWARD_MESSAGES);
    }

    /**
     * @return bool
     */
    public function isImportant(): bool
    {
        return $this->message->get(self::IMPORTANT);
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->message->get(self::IS_HIDDEN);
    }

    /**
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->message->get(self::PEER_ID);
    }

    /**
     * @return int
     */
    public function getRandomId(): int
    {
        return $this->message->get(self::RANDOM_ID);
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->message->get(self::TEXT);
    }
}
