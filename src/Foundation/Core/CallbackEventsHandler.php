<?php

namespace Hopex\VkSdk\Foundation\Core;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Illuminate\Support\Collection;

class CallbackEventsHandler implements CallbackEventsContract
{
    /**
     * @param Collection $event
     * @return void
     */
    public function message_new(Collection $event): void
    {
        // TODO: Implement message_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function message_reply(Collection $event): void
    {
        // TODO: Implement message_reply() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function message_allow(Collection $event): void
    {
        // TODO: Implement message_allow() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function message_deny(Collection $event): void
    {
        // TODO: Implement message_deny() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_new(Collection $event): void
    {
        // TODO: Implement photo_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_new(Collection $event): void
    {
        // TODO: Implement photo_comment_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_edit(Collection $event): void
    {
        // TODO: Implement photo_comment_edit() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_restore(Collection $event): void
    {
        // TODO: Implement photo_comment_restore() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_delete(Collection $event): void
    {
        // TODO: Implement photo_comment_delete() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function audio_new(Collection $event): void
    {
        // TODO: Implement audio_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function video_new(Collection $event): void
    {
        // TODO: Implement video_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_new(Collection $event): void
    {
        // TODO: Implement video_comment_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_edit(Collection $event): void
    {
        // TODO: Implement video_comment_edit() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_restore(Collection $event): void
    {
        // TODO: Implement video_comment_restore() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_delete(Collection $event): void
    {
        // TODO: Implement video_comment_delete() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_post_new(Collection $event): void
    {
        // TODO: Implement wall_post_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_repost(Collection $event): void
    {
        // TODO: Implement wall_repost() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_new(Collection $event): void
    {
        // TODO: Implement wall_reply_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_edit(Collection $event): void
    {
        // TODO: Implement wall_reply_edit() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_restore(Collection $event): void
    {
        // TODO: Implement wall_reply_restore() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_delete(Collection $event): void
    {
        // TODO: Implement wall_reply_delete() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_new(Collection $event): void
    {
        // TODO: Implement board_post_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_edit(Collection $event): void
    {
        // TODO: Implement board_post_edit() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_restore(Collection $event): void
    {
        // TODO: Implement board_post_restore() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_delete(Collection $event): void
    {
        // TODO: Implement board_post_delete() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_new(Collection $event): void
    {
        // TODO: Implement market_comment_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_edit(Collection $event): void
    {
        // TODO: Implement market_comment_edit() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_restore(Collection $event): void
    {
        // TODO: Implement market_comment_restore() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_delete(Collection $event): void
    {
        // TODO: Implement market_comment_delete() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function group_leave(Collection $event): void
    {
        // TODO: Implement group_leave() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function group_join(Collection $event): void
    {
        // TODO: Implement group_join() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function group_change_settings(Collection $event): void
    {
        // TODO: Implement group_change_settings() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function group_change_photo(Collection $event): void
    {
        // TODO: Implement group_change_photo() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function group_officers_edit(Collection $event): void
    {
        // TODO: Implement group_officers_edit() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function poll_vote_new(Collection $event): void
    {
        // TODO: Implement poll_vote_new() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function user_block(Collection $event): void
    {
        // TODO: Implement user_block() method.
    }

    /**
     * @param Collection $event
     * @return void
     */
    public function user_unbloc(Collection $event): void
    {
        // TODO: Implement user_unbloc() method.
    }
}
