<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages\Conversations;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Facades\RequestFields;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserProfileFields;
use Illuminate\Support\Collection;
use Throwable;

class ConversationField
{
    /** @var Collection */
    private Collection $conversation;

    /**
     * ConversationField constructor.
     * @param array|Collection $conversation
     */
    public function __construct(array|Collection $conversation)
    {
        $this->conversation = $conversation instanceof Collection ? $conversation : collect($conversation);
    }

    /**
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->conversation->get('peer')['id'];
    }

    /**
     * @return int
     */
    public function getPeerType(): int
    {
        return $this->conversation->get('peer')['type'];
    }

    /**
     * @return int
     */
    public function getPeerLocalId(): int
    {
        return $this->conversation->get('peer')['local_id'];
    }

    /**
     * @return int
     */
    public function getLastMessageId(): int
    {
        return $this->conversation->get('last_message_id');
    }

    /**
     * @return int
     */
    public function getInRead(): int
    {
        return $this->conversation->get('in_read');
    }

    /**
     * @return int
     */
    public function getOutRead(): int
    {
        return $this->conversation->get('out_read');
    }

    /**
     * @return int
     */
    public function getSortMajorId(): int
    {
        return $this->conversation->get('major_id');
    }

    /**
     * @return int
     */
    public function getSortMinorId(): int
    {
        return $this->conversation->get('minor_id');
    }

    /**
     * @return int
     */
    public function getLastConversationMessageId(): int
    {
        return $this->conversation->get('last_conversation_message_id');
    }

    /**
     * @return int
     */
    public function getInReadCmid(): int
    {
        return $this->conversation->get('in_read_cmid');
    }

    /**
     * @return int
     */
    public function getOutReadCmid(): int
    {
        return $this->conversation->get('out_read_cmid');
    }

    /**
     * @return bool
     */
    public function isMarkedUnread(): bool
    {
        return $this->conversation->get('is_marked_unread');
    }

    /**
     * @return bool
     */
    public function isImportant(): bool
    {
        return $this->conversation->get('important');
    }

    /**
     * @return bool
     */
    public function IsKeyboardOneTime(): bool
    {
        return $this->conversation->get('current_keyboard')['one_time'];
    }

    /**
     * @return Collection
     */
    public function getKeyboardButtons(): Collection
    {
        return collect($this->conversation->get('current_keyboard')['buttons']);
    }

    /**
     * @return int
     */
    public function getKeyboardAuthorId(): int
    {
        return $this->conversation->get('current_keyboard')['author_id'];
    }

    /**
     * @return bool
     */
    public function isKeyboardInline(): bool
    {
        return $this->conversation->get('current_keyboard')['inline'];
    }

    /**
     * @return bool
     */
    public function canWrite(): bool
    {
        return $this->conversation->get('can_write')['allowed'];
    }

    /**
     * @return string
     */
    public function getChatTitle(): string
    {
        return $this->conversation->get('chat_settings')['title'];
    }

    /**
     * @return int
     */
    public function getChatMembersCount(): int
    {
        return $this->conversation->get('chat_settings')['members_count'];
    }

    /**
     * @return int
     */
    public function getChatOwnerId(): int
    {
        return $this->conversation->get('chat_settings')['owner_id'];
    }

    /**
     * @param string $token
     * @param array $userProfileFields
     * @return UserProfileFields
     * @throws ApiException
     * @throws Throwable
     */
    public function getChatOwner(
        string $token,
        array $userProfileFields = []
    ): UserProfileFields {
        return new UserProfileFields(
            collect(
                VkApi::user($token)
                    ->get(
                        RequestFields::user()
                            ->setUserId($this->getChatOwnerId())
                            ->setProfileFields($userProfileFields)
                    )->first()
            )
        );
    }

    /**
     * @return string
     */
    public function getChatState(): string
    {
        return $this->conversation->get('chat_settings')['state'];
    }

    /**
     * @return string
     */
    public function getChatPhoto50(): string
    {
        return $this->conversation->get('chat_settings')['photo']['photo_50'];
    }

    /**
     * @return string
     */
    public function getChatPhoto100(): string
    {
        return $this->conversation->get('chat_settings')['photo']['photo_100'];
    }

    /**
     * @return string
     */
    public function getChatPhoto200(): string
    {
        return $this->conversation->get('chat_settings')['photo']['photo_200'];
    }

    /**
     * @return bool
     */
    public function isDefaultChatPhoto(): bool
    {
        return $this->conversation->get('chat_settings')['photo']['is_default_photo'];
    }

    /**
     * @return bool
     */
    public function isDefaultChatCallPhoto(): bool
    {
        return $this->conversation->get('chat_settings')['photo']['is_default_call_photo'];
    }

    /**
     * @return Collection
     */
    public function getChatAdminIds(): Collection
    {
        return collect($this->conversation->get('chat_settings')['admin_ids']);
    }

    /**
     * @param string $token
     * @param array $userProfileFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getChatAdminProfiles(
        string $token,
        array $userProfileFields = []
    ): Collection {
        return VkApi::user($token)
            ->get(
                RequestFields::user()
                    ->setUserIds($this->conversation->get('chat_settings')['admin_ids'])
                    ->setProfileFields($userProfileFields)
            )
            ->map(function ($profile) {
                return new UserProfileFields($profile);
            });
    }

    /**
     * @return Collection
     */
    public function getChatActiveIds(): Collection
    {
        return collect($this->conversation->get('chat_settings')['active_ids']);
    }

    /**
     * @param string $token
     * @param array $userProfileFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getChatActiveProfiles(
        string $token,
        array $userProfileFields = []
    ): Collection {
        return VkApi::user($token)
            ->get(
                RequestFields::user()
                    ->setUserIds($this->conversation->get('chat_settings')['active_ids'])
                    ->setProfileFields($userProfileFields)
            )
            ->map(function ($profile) {
                return new UserProfileFields($profile);
            });
    }

    /**
     * @return bool
     */
    public function isChatGroupChannel(): bool
    {
        return $this->conversation->get('chat_settings')['is_group_channel'];
    }

    /**
     * @return bool
     */
    public function canChatChangInfo(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_change_info'];
    }

    /**
     * @return bool
     */
    public function canChatChangeInviteLink(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_change_invite_link'];
    }

    /**
     * @return bool
     */
    public function canChatChangePin(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_change_pin'];
    }

    /**
     * @return bool
     */
    public function canChatInvite(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_invite'];
    }

    /**
     * @return bool
     */
    public function canChatPromoteUsers(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_promote_users'];
    }

    /**
     * @return bool
     */
    public function canChatSeeInviteLink(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_see_invite_link'];
    }

    /**
     * @return bool
     */
    public function canChatModerate(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_moderate'];
    }

    /**
     * @return bool
     */
    public function canChatCopy(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_copy_chat'];
    }

    /**
     * @return bool
     */
    public function canCall(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_call'];
    }

    /**
     * @return bool
     */
    public function canChatUseMassMentions(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_use_mass_mentions'];
    }

    /**
     * @return bool
     */
    public function canChatChangeStyle(): bool
    {
        return $this->conversation->get('chat_settings')['acl']['can_change_style'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsInvite(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['invite'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsChangeInfo(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['change_info'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsChangePin(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['change_pin'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsUseMassMentions(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['use_mass_mentions'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsSeeInviteLink(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['see_invite_link'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsCall(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['call'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsChangeAdmins(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['change_admins'];
    }

    /**
     * @return string
     */
    public function getChatPermissionsChangeStyle(): string
    {
        return $this->conversation->get('chat_settings')['permissions']['change_style'];
    }

    /**
     * @return bool
     */
    public function isChatDisappearing(): bool
    {
        return $this->conversation->get('chat_settings')['is_disappearing'];
    }

    /**
     * @return bool
     */
    public function isChatService(): bool
    {
        return $this->conversation->get('chat_settings')['is_service'];
    }
}
