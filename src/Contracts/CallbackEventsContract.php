<?php

namespace Hopex\VkSdk\Contracts;

use Illuminate\Support\Collection;

interface CallbackEventsContract
{
    /**
     * @param Collection $event
     * @return void
     */
    public function message_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function message_reply(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function message_allow(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function message_deny(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_edit(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_restore(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function photo_comment_delete(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function audio_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function video_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_edit(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_restore(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function video_comment_delete(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_post_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_repost(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_edit(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_restore(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function wall_reply_delete(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_edit(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_restore(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function board_post_delete(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_edit(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_restore(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function market_comment_delete(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function group_leave(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function group_join(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function group_change_settings(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function group_change_photo(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function group_officers_edit(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function poll_vote_new(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function user_block(Collection $event): void;

    /**
     * @param Collection $event
     * @return void
     */
    public function user_unbloc(Collection $event): void;

}
