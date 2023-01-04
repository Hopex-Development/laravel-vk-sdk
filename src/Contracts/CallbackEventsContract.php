<?php

namespace Hopex\VkSdk\Contracts;

use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageFields;

/**
 * Interface CallbackEventsContract
 * @package Hopex\VkSdk\Contracts
 */
interface CallbackEventsContract
{
    /**
     * @param MessageFields $message
     * @return void
     */
    public function message_new(MessageFields $message): void;

    /**
     * @param MessageFields $message
     * @return void
     */
    public function message_reply(MessageFields $message): void;

    /**
     * @param MessageFields $message
     * @return void
     */
    public function message_allow(MessageFields $message): void;

    /**
     * @param MessageFields $message
     * @return void
     */
    public function message_deny(MessageFields $message): void;

//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function photo_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function photo_comment_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function photo_comment_edit(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function photo_comment_restore(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function photo_comment_delete(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function audio_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function video_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function video_comment_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function video_comment_edit(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function video_comment_restore(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function video_comment_delete(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function wall_post_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function wall_repost(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function wall_reply_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function wall_reply_edit(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function wall_reply_restore(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function wall_reply_delete(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function board_post_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function board_post_edit(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function board_post_restore(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function board_post_delete(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function market_comment_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function market_comment_edit(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function market_comment_restore(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function market_comment_delete(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function group_leave(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function group_join(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function group_change_settings(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function group_change_photo(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function group_officers_edit(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function poll_vote_new(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function user_block(BaseEvent $event): void;
//
//    /**
//     * @param BaseEvent $event
//     * @return void
//     */
//    public function user_unblock(BaseEvent $event): void;
}
