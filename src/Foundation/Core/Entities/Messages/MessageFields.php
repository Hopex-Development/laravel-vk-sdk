<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages;

use Carbon\Carbon;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserProfileFields;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserRequestFields;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Message fields.
 *
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages
 */
class MessageFields
{
    private Collection $message;

    /**
     * Message fields.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param Collection $message
     */
    public function __construct(Collection $message)
    {
        $this->message = $message;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return Carbon
     */
    public function getDate(): Carbon
    {
        return new Carbon($this->message->get('date'));
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string            $token
     * @param UserRequestFields $userRequestFields
     * @param array             $userProfileFields
     *
     * @throws ApiException
     * @throws Throwable
     * @return UserProfileFields
     */
    public function getSender(
        string $token,
        UserRequestFields $userRequestFields,
        array $userProfileFields = []
    ): UserProfileFields {
        return new UserProfileFields(
            collect(
                VkApi::user($token)
                    ->get($userRequestFields->setProfileFields($userProfileFields))
                    ->first()
            )
        );
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function getSenderId(): int
    {
        return $this->message->get('from_id');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->message->get('id');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function getOut(): int
    {
        return $this->message->get('out');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return array
     */
    public function getAttachments(): array
    {
        // TODO:
        // добавить сущность
        return $this->message->get('attachments');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function getConversationMessageId(): int
    {
        return $this->message->get('conversation_message_id');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return array
     */
    public function getForwardMessages(): array
    {
        return $this->message->get('fwd_messages', []);
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return MessageFields
     */
    public function getReplyMessage(): MessageFields
    {
        return new MessageFields(collect($this->message->get('reply_message')));
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool
     */
    public function isImportant(): bool
    {
        return $this->message->get('important');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->message->get('is_hidden');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->message->get('peer_id');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function getRandomId(): int
    {
        return $this->message->get('random_id');
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->message->get('text');
    }
}
