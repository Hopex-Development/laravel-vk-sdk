<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Attachments;

use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder;
use Hopex\VkSdk\Facades\SimpleRequestBuilders\Users\UsersFields as UsersFieldsFacade;
use Hopex\VkSdk\Facades\VkApi;
use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;
use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields;
use Illuminate\Support\Carbon;
use Throwable;

/**
 * The object describing the audio recording.
 * <br><br>
 *
 * Fields used in API versions
 * {@see https://dev.vk.com/en/reference/objects/audio#Api%20versions%20below%205.0 below 5.0} are not implemented and
 * are not recommended for use, but you can use them using a magic call.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Attachments
 *
 * @link    https://dev.vk.com/en/reference/objects/audio
 *
 * @property-read int    $noSearch
 * @property-read int    $date
 * @property-read int    $genreId
 * @property-read int    $albumId
 * @property-read int    $lyricsId
 * @property-read string $url
 * @property-read int    $duration
 * @property-read string $title
 * @property-read string $artist
 * @property-read int    $ownerId
 * @property-read int    $id
 */
class Audio extends AbstractEntity
{
    /**
     * Audio ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#id
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The owner of the audio recording.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @see     Audio::ownerId()
     *
     * @param UsersFieldsFacade|UsersFields|null $usersFields             Users fields to return.
     * @param int|null                           $entityIdThatCanHasToken Similar parameter in the
     *                                                                    {@see AbstractRequestBuilder::query()}
     *                                                                    method.
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return User
     */
    public function owner(UsersFieldsFacade|UsersFields $usersFields = null, int $entityIdThatCanHasToken = null): User
    {
        return VkApi::users()->get(
            UsersGetRequestBuilder::query($entityIdThatCanHasToken)
                ->userIdsCommaList($this->ownerId())
                ->fields($usersFields ?? new UsersFields())
        )->users()->first();
    }

    /**
     * The owner ID of the audio recording.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#owner_id
     *
     * @return int
     */
    public function ownerId(): int
    {
        return $this->ownerId ?? 0;
    }

    /**
     * Executor.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#artist
     *
     * @return string
     */
    public function artist(): string
    {
        return $this->artist ?? '';
    }

    /**
     * Name of composition.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#title
     *
     * @return string
     */
    public function title(): string
    {
        return $this->title ?? '';
    }

    /**
     * Duration of audio recording in seconds.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#duration
     *
     * @return int
     */
    public function duration(): int
    {
        return $this->duration ?? 0;
    }

    /**
     * Link to MP3.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#url
     *
     * @return string
     */
    public function url(): string
    {
        return $this->url ?? '';
    }

    /**
     * Audio recording text identifier (if available).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#lyrics_id
     *
     * @return int
     */
    public function lyricsId(): int
    {
        return $this->lyricsId ?? 0;
    }

    /**
     * The ID of the album containing the audio recording (if assigned).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#album_id
     *
     * @return int
     */
    public function albumId(): int
    {
        return $this->albumId ?? 0;
    }

    /**
     * Genre of track.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio-genres
     *
     * @return string
     */
    public function genre(): string
    {
        return match ($this->genreId()) {
            1 => 'Rock',
            2 => 'Pop',
            3 => 'Rap & Hip-Hop',
            4 => 'Easy Listening',
            5 => 'House & Dance',
            6 => 'Instrumental',
            7 => 'Metal',
            8 => 'Dubstep',
            10 => 'Drum & Bass',
            11 => 'Trance',
            12 => 'Chanson',
            13 => 'Ethnic',
            14 => 'Acoustic & Vocal',
            15 => 'Reggae',
            16 => 'Classical',
            17 => 'Indie Pop',
            19 => 'Speech',
            21 => 'Alternative',
            22 => 'Electropop & Disco',
            18 => 'Other',
            1001 => 'Jazz & Blues',
            default => 'Unknown',
        };
    }

    /**
     * Genre ID from {@see https://dev.vk.com/en/reference/objects/audio-genres list of audio genres}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#genre_id
     * @see     Audio::genre()
     *
     * @return int
     */
    public function genreId(): int
    {
        return $this->genreId ?? 0;
    }

    /**
     * Date of addition.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#date
     *
     * @return Carbon
     */
    public function date(): Carbon
    {
        return (new Carbon($this->date ?? 0))->setTimezone(config('app.timezone'));
    }

    /**
     * `true` if the option "Do not output when searching" is `enabled`. If the option is disabled, the field is not
     * returned.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/audio#no_search
     *
     * @return bool
     */
    public function noSearch(): bool
    {
        return (bool)$this->noSearch;
    }
}
