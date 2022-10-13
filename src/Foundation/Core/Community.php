<?php

namespace Hopex\VkSdk\Foundation\Core;

use Hopex\VkSdk\Contracts\CommunityContract;
use Hopex\VkSdk\Foundation\Core\Community\Links;

/**
 * Сообщество.
 *
 * @package Hopex\VkSdk\Foundation\Core
 */
abstract class Community implements CommunityContract
{
    protected array $fillable = [
        'id',
        'name',
        'screen_name',
        'is_closed',
        'deactivated',
        'is_admin',
        'admin_level',
        'is_member',
        'is_advertiser',
        'invited_by',
        'type',
        'photo_50',
        'photo_100',
        'photo_200',
        'activity',
        'addresses',
        'age_limits',
        'ban_info',
        'can_create_topic',
        'can_message',
        'can_post',
        'can_see_all_posts',
        'can_upload_doc',
        'can_upload_story',
        'can_upload_video',
        'city',
        'contacts',
        'counters',
        'country',
        'cover',
        'crop_photo',
        'description',
        'fixed_post',
        'has_photo',
        'is_favorite',
        'is_hidden_from_feed',
        'is_messages_blocked',
        'links',
        'main_album_id',
        'main_section',
        'market',
        'member_status',
        'members_count',
        'place',
        'public_date_label',
        'site',
        'start_date и finish_date',
        'status',
        'trending',
        'verified',
        'wall',
        'wiki_page'
    ];

    #region Properties

    /**
     * Идентификатор сообщества.
     *
     * @var int
     */
    protected int $id;

    /**
     * Название сообщества.
     *
     * @var int
     */
    protected int $name;

    /**
     * Короткий адрес, например, apiclub.
     *
     * @var string
     */
    protected string $screenName;

    /**
     * Является ли сообщество закрытым.
     * Возможные значения:
     * 0 — открытое;
     * 1 — закрытое;
     * 2 — частное.
     *
     * @var int
     */
    protected int $isClosed;

    /**
     * Возвращается в случае, если сообщество удалено или заблокировано.
     * Возможные значения:
     * deleted — сообщество удалено;
     * banned — сообщество заблокировано;
     *
     * @var string
     */
    protected string $deactivated;

    /**
     * Требуется scope = groups.
     * Информация о том, является ли текущий пользователь руководителем.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @var int
     */
    protected int $isAdmin;

    /**
     * Требуется scope = groups.
     * Уровень полномочий текущего пользователя (если $isAdmin = 1):
     * 1 — модератор;
     * 2 — редактор;
     * 3 — администратор.
     *
     * @var int
     */
    protected int $adminLevel;

    /**
     * Требуется scope = groups.
     * Информация о том, является ли текущий пользователь участником.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @var int
     */
    protected int $isMember;

    /**
     * Требуется scope = groups.
     * Информация о том, является ли текущий пользователь рекламодателем.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @var int
     */
    protected int  $isAdvertiser;

    /**
     * Требуется scope = groups.
     * Идентификатор пользователя, который отправил приглашение в сообщество.
     * Поле возвращается только для метода groups.getInvites.
     *
     * @var int
     */
    protected int $invitedBy;

    /**
     * Тип сообщества:
     * group — группа;
     * page — публичная страница;
     * event — мероприятие.
     *
     * @var string
     */
    protected string $type;

    /**
     * URL главной фотографии с размером 50x50px.
     *
     * @var string
     */
    protected string $photo50;

    /**
     * URL главной  фотографии с размером 100х100px.
     *
     * @var string
     */
    protected string $photo100;

    /**
     * URL главной фотографии в максимальном размере.
     *
     * @var string
     */
    protected string $photo200;

    /**
     * Строка тематики паблика.
     * У групп возвращается строковое значение,
     * открыта ли группа или нет, а у событий дата начала.
     *
     * @var string
     */
    protected string $activity;

    /**
     * Информация об адресах сообщества.
     * Возвращаются следующие поля:
     * is_enabled (boolean) — включен ли блок адресов в сообществе.
     * main_address_id (integer) — идентификатор основного адреса.
     *
     * @var
     */
    protected $addresses;

    /**
     * Возрастное ограничение.
     * 1 — нет;
     * 2 — 16+;
     * 3 — 18+.
     *
     * @var int
     */
    protected int $ageLimits;

    /**
     * Информация о занесении в черный список сообщества
     * (поле возвращается только при запросе информации об одном сообществе).
     * Объект, содержащий следующие поля:
     * end_date (integer) — срок окончания блокировки в формате unixtime;
     * comment (string) — комментарий к блокировке.
     *
     * @var
     */
    protected $banInfo;

    /**
     * Информация о том, может ли текущий пользователь
     * создать новое обсуждение в группе.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canCreateTopic;

    /**
     * Информация о том, может ли текущий пользователь
     * написать сообщение сообществу.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canMessage;

    /**
     * Информация о том, может ли текущий пользователь оставлять записи на стене сообщества.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canPost;

    /**
     * Информация о том, разрешено ли видеть чужие записи на стене группы.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canSeeAllPosts;

    /**
     * Информация о том, может ли текущий пользователь загружать документы в группу.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canUploadDoc;

    /**
     * Информация о том, может ли текущий пользователь загружать истории от имени сообщества:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canUploadStory;

    /**
     * Информация о том, может ли текущий пользователь загружать видеозаписи в группу.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @var int
     */
    protected int $canUploadVideo;

    /**
     * Город, указанный в информации о сообществе. Объект, содержащий следующие поля:
     * id (integer) — идентификатор города;
     * title (string) — название города.
     *
     * @var
     */
    protected $city;

    /**
     * Информация из блока контактов публичной страницы.
     * Массив объектов, каждый из которых может содержать поля:
     * user_id (integer) — идентификатор пользователя;
     * desc (string) — должность;
     * phone (string) — номер телефона;
     * email (string) — адрес e-mail.
     *
     * @var array
     */
    protected array $contacts;

    /**
     * Объект, содержащий счётчики сообщества, может включать
     * любой набор из следующих полей:
     * photos, albums, audios, videos, topics, docs.
     * Поле возвращается только при запросе данных об одном сообществе
     *
     * @var
     */
    protected $counters;

    /**
     * Страна, указанная в информации о сообществе.
     * Объект, содержащий следующие поля:
     * id (integer) — идентификатор страны;
     * title (string) — название страны.
     *
     * @var
     */
    protected $country;

    /**
     * Обложка сообщества.
     * Объект, который содержит следующие поля:
     * enabled (integer) — информация о том, включена ли обложка (1 — да, 0 — нет);
     * images (array) — копии изображений обложки.
     * Массив объектов, каждый из которых содержит следующие поля:
     * url (string) — URL копии;
     * width (integer) — ширина копии;
     * height (integer) — высота копии.
     *
     * @var
     */
    protected $cover;

    /**
     * Возвращает данные о точках, по которым вырезаны
     * профильная и миниатюрная фотографии сообщества.
     * photo (object) — объект photo фотографии пользователя, из которой вырезается главное фото сообщества.
     * crop (object) — вырезанная фотография сообщества. Содержит следующие поля:
     * x (number) — координата X левого верхнего угла в процентах;
     * y (number) — координата Y левого верхнего угла в процентах;
     * x2 (number) — координата X правого нижнего угла в процентах;
     * y2 (number) — координата Y правого нижнего угла в процентах.
     * rect (object) — миниатюрная квадратная фотография, вырезанная из фотографии crop.
     * Содержит набор полей, аналогичный объекту crop.
     *
     * @var
     */
    protected $cropPhoto;

    /**
     * Текст описания сообщества.
     *
     * @var string
     */
    protected string $description;

    /**
     * Идентификатор закрепленной записи.
     * Получить дополнительные данные о записи можно методом wall.getById,
     * передав в поле posts {group_id}{post_id}.
     *
     * @var int
     */
    protected int $fixedPost;

    /**
     * Информация о том, установлена ли у сообщества главная фотография.
     * Возможные значения:
     * 1 — установлена;
     * 0 — не установлена.
     *
     * @var int
     */
    protected int $hasPhoto;

    /**
     * Информация о том, находится ли сообщество в закладках у текущего пользователя.
     * Возможные значения:
     * 1 — находится;
     * 0 — не находится.
     *
     * @var int
     */
    protected int $isFavorite;

    /**
     * Информация о том, скрыто ли сообщество из ленты новостей текущего пользователя.
     * Возможные значения:
     * 1 — скрыто;
     * 0 — не скрыто.
     *
     * @var int
     */
    protected int $isHiddenFromFeed;

    /**
     * Информация о том, заблокированы ли сообщения
     * от этого сообщества (для текущего пользователя).
     *
     * @var int
     */
    protected int $isMessagesBlocked;

    /**
     * Информация из блока ссылок сообщества.
     * Поле возвращается только при запросе данных об одном сообществе.
     * Массив объектов, каждый из которых содержит следующие поля:
     * id (integer) — идентификатор ссылки;
     * url (string) — URL;
     * name (string) — название ссылки;
     * desc (string) — описание ссылки;
     * photo_50 (string) — URL изображения-превью шириной 50px;
     * photo_100 (string) — URL изображения-превью шириной 100px.
     *
     * @var Links
     */
    protected Links $links;

    /**
     * Идентификатор основного фотоальбома.
     *
     * @var int
     */
    protected int $mainAlbumId;

    /**
     * Информация о главной секции. Возможные значения:
     * 0 — отсутствует;
     * 1 — фотографии;
     * 2 — обсуждения;
     * 3 — аудиозаписи;
     * 4 — видеозаписи;
     * 5 — товары.
     *
     * @var int
     */
    protected int $mainSection;

    /**
     * Информация о магазине.
     * Объект, содержащий следующие поля:
     * enabled (integer) — информация о том, включен ли блок товаров в сообществе.
     * Возможные значения:
     * 1 — включен;
     * 0 — выключен. Если enabled = 0, объект не содержит других полей.
     * type (string) — информация о типе магазина.
     * Возвращается, если в группе включен раздел "Товары".
     * Возможные значения:
     * basic — базовые товары;
     * advanced — расширенные товары.
     * price_min (integer) — минимальная цена товаров;
     * price_max (integer)— максимальная цена товаров;
     * main_album_id (integer) — идентификатор главной подборки товаров;
     * contact_id (integer) — идентификатор контактного лица для связи с продавцом.
     * Возвращается отрицательное значение, если для связи с продавцом используются сообщения сообщества;
     * currency (object) — информация о валюте.
     * Объект, содержащий поля:
     * id (integer) — идентификатор валюты;
     * name (string) — символьное обозначение;
     * currency_text (string) — строковое обозначение.
     *
     * @var
     */
    protected $market;

    /**
     * Требуется scope = groups.
     * Статус участника текущего пользователя.
     * Возможные значения:
     * 0 — не является участником;
     * 1 — является участником;
     * 2 — не уверен, что посетит мероприятие;
     * 3 — отклонил приглашение;
     * 4 — запрос на вступление отправлен;
     * 5 — приглашен.
     *
     * @var int
     */
    protected int $memberStatus;

    /**
     * Количество участников в сообществе.
     *
     * @var int
     */
    protected int $membersCount;

    /**
     * Место, указанное в информации о сообществе.
     * Объект, содержащий следующие поля:
     * id (integer) — идентификатор места;
     * title (string) — название места;
     * latitude (number) — географическая широта в градусах (от -90 до 90);
     * longitude (number) — географическая долгота в градусах (от -180 до 180);
     * type (string) — тип места;
     * country (integer) — идентификатор страны;
     * city (integer) — идентификатор города;
     * address (string) — адрес.
     *
     * @var
     */
    protected $place;

    /**
     * Возвращается для публичных страниц.
     * Текст описания для поля startDate.
     *
     * @var string
     */
    protected string $publicDateLabel;

    /**
     * Адрес сайта из поля «веб-сайт» в описании сообщества.
     *
     * @var string
     */
    protected string $site;

    /**
     * Для встреч содержит время начала встречи в формате unixtime.
     *
     * @var int
     */
    protected int $startDate;

    /**
     * Для встреч содержит время окончания встречи в формате unixtime.
     * Для публичных страниц содержит только время начала — дата основания в формате YYYYMMDD.
     *
     * @var int
     */
    protected int $finishDate;

    /**
     * Статус сообщества.
     *
     * @var string
     */
    protected string $status;

    /**
     * Информация о том, есть ли у сообщества «огонёк».
     *
     * @var int
     */
    protected int $trending;

    /**
     * Информация о том, верифицировано ли сообщество.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @var int
     */
    protected int $verified;

    /**
     * Стена.
     * Возможные значения:
     * 0 — выключена;
     * 1 — открытая;
     * 2 — ограниченная;
     * 3 — закрытая.
     *
     * @var int
     */
    protected int $wall;

    /**
     * Название главной вики-страницы.
     *
     * @var string
     */
    protected string $wikiPage;

    #endregion

    #region Getters

    /**
     * Идентификатор сообщества.
     *
     * @return int
     */
    protected function getId(): int
    {
        return $this->id;
    }

    /**
     * Название сообщества.
     *
     * @return int
     */
    protected function getName(): int
    {
        return $this->name;
    }

    /**
     * Короткий адрес, например, apiclub.
     *
     * @return string
     */
    protected function getScreenName(): string
    {
        return $this->screenName;
    }

    /**
     * Является ли сообщество закрытым.
     * Возможные значения:
     * 0 — открытое;
     * 1 — закрытое;
     * 2 — частное.
     *
     * @return int
     */
    protected function getIsClosed(): int
    {
        return $this->isClosed;
    }

    /**
     * Возвращается в случае, если сообщество удалено или заблокировано.
     * Возможные значения:
     * deleted — сообщество удалено;
     * banned — сообщество заблокировано;
     *
     * @return string
     */
    protected function getDeactivated(): string
    {
        return $this->deactivated;
    }

    /**
     * Требуется scope = groups.
     * Информация о том, является ли текущий пользователь руководителем.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @return int
     */
    protected function getIsAdmin(): int
    {
        return $this->isAdmin;
    }

    /**
     * Требуется scope = groups.
     * Уровень полномочий текущего пользователя (если $isAdmin = 1):
     * 1 — модератор;
     * 2 — редактор;
     * 3 — администратор.
     *
     * @return int
     */
    protected function getAdminLevel(): int
    {
        return $this->adminLevel;
    }

    /**
     * Требуется scope = groups.
     * Информация о том, является ли текущий пользователь участником.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @return int
     */
    protected function getIsMember(): int
    {
        return $this->isMember;
    }

    /**
     * Требуется scope = groups.
     * Информация о том, является ли текущий пользователь рекламодателем.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @return int
     */
    protected function getIsAdvertiser(): int
    {
        return $this->isAdvertiser;
    }

    /**
     * Требуется scope = groups.
     * Идентификатор пользователя, который отправил приглашение в сообщество.
     * Поле возвращается только для метода groups.getInvites.
     *
     * @return int
     */
    protected function getInvitedBy(): int
    {
        return $this->invitedBy;
    }

    /**
     * Тип сообщества:
     * group — группа;
     * page — публичная страница;
     * event — мероприятие.
     *
     * @return string
     */
    protected function getType(): string
    {
        return $this->type;
    }

    /**
     * URL главной фотографии с размером 50x50px.
     *
     * @return string
     */
    protected function getPhoto50(): string
    {
        return $this->photo50;
    }

    /**
     * URL главной  фотографии с размером 100х100px.
     *
     * @return string
     */
    protected function getPhoto100(): string
    {
        return $this->photo100;
    }

    /**
     * URL главной фотографии в максимальном размере.
     *
     * @return string
     */
    protected function getPhoto200(): string
    {
        return $this->photo200;
    }

    /**
     * Строка тематики паблика.
     * У групп возвращается строковое значение,
     * открыта ли группа или нет, а у событий дата начала.
     *
     * @return string
     */
    protected function getActivity(): string
    {
        return $this->activity;
    }

    /**
     * Информация об адресах сообщества.
     * Возвращаются следующие поля:
     * is_enabled (boolean) — включен ли блок адресов в сообществе.
     * main_address_id (integer) — идентификатор основного адреса.
     *
     * @return mixed
     */
    protected function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Возрастное ограничение.
     * 1 — нет;
     * 2 — 16+;
     * 3 — 18+.
     *
     * @return int
     */
    protected function getAgeLimits(): int
    {
        return $this->ageLimits;
    }

    /**
     * Информация о занесении в черный список сообщества
     * (поле возвращается только при запросе информации об одном сообществе).
     * Объект, содержащий следующие поля:
     * end_date (integer) — срок окончания блокировки в формате unixtime;
     * comment (string) — комментарий к блокировке.
     *
     * @return mixed
     */
    protected function getBanInfo()
    {
        return $this->banInfo;
    }

    /**
     * Информация о том, может ли текущий пользователь
     * создать новое обсуждение в группе.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanCreateTopic(): int
    {
        return $this->canCreateTopic;
    }

    /**
     * Информация о том, может ли текущий пользователь
     * написать сообщение сообществу.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanMessage(): int
    {
        return $this->canMessage;
    }

    /**
     * Информация о том, может ли текущий пользователь оставлять записи на стене сообщества.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanPost(): int
    {
        return $this->canPost;
    }

    /**
     * Информация о том, разрешено ли видеть чужие записи на стене группы.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanSeeAllPosts(): int
    {
        return $this->canSeeAllPosts;
    }

    /**
     * Информация о том, может ли текущий пользователь загружать документы в группу.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanUploadDoc(): int
    {
        return $this->canUploadDoc;
    }

    /**
     * Информация о том, может ли текущий пользователь загружать истории от имени сообщества:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanUploadStory(): int
    {
        return $this->canUploadStory;
    }

    /**
     * Информация о том, может ли текущий пользователь загружать видеозаписи в группу.
     * Возможные значения:
     * 1 — может;
     * 0 — не может.
     *
     * @return int
     */
    protected function getCanUploadVideo(): int
    {
        return $this->canUploadVideo;
    }

    /**
     * Город, указанный в информации о сообществе. Объект, содержащий следующие поля:
     * id (integer) — идентификатор города;
     * title (string) — название города.
     *
     * @return mixed
     */
    protected function getCity()
    {
        return $this->city;
    }

    /**
     * Информация из блока контактов публичной страницы.
     * Массив объектов, каждый из которых может содержать поля:
     * user_id (integer) — идентификатор пользователя;
     * desc (string) — должность;
     * phone (string) — номер телефона;
     * email (string) — адрес e-mail.
     *
     * @return array
     */
    protected function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * Объект, содержащий счётчики сообщества, может включать
     * любой набор из следующих полей:
     * photos, albums, audios, videos, topics, docs.
     * Поле возвращается только при запросе данных об одном сообществе
     *
     * @return mixed
     */
    protected function getCounters()
    {
        return $this->counters;
    }

    /**
     * Страна, указанная в информации о сообществе.
     * Объект, содержащий следующие поля:
     * id (integer) — идентификатор страны;
     * title (string) — название страны.
     *
     * @return mixed
     */
    protected function getCountry()
    {
        return $this->country;
    }

    /**
     * Обложка сообщества.
     * Объект, который содержит следующие поля:
     * enabled (integer) — информация о том, включена ли обложка (1 — да, 0 — нет);
     * images (array) — копии изображений обложки.
     * Массив объектов, каждый из которых содержит следующие поля:
     * url (string) — URL копии;
     * width (integer) — ширина копии;
     * height (integer) — высота копии.
     *
     * @return mixed
     */
    protected function getCover()
    {
        return $this->cover;
    }

    /**
     * Возвращает данные о точках, по которым вырезаны
     * профильная и миниатюрная фотографии сообщества.
     * photo (object) — объект photo фотографии пользователя, из которой вырезается главное фото сообщества.
     * crop (object) — вырезанная фотография сообщества. Содержит следующие поля:
     * x (number) — координата X левого верхнего угла в процентах;
     * y (number) — координата Y левого верхнего угла в процентах;
     * x2 (number) — координата X правого нижнего угла в процентах;
     * y2 (number) — координата Y правого нижнего угла в процентах.
     * rect (object) — миниатюрная квадратная фотография, вырезанная из фотографии crop.
     * Содержит набор полей, аналогичный объекту crop.
     *
     * @return mixed
     */
    protected function getCropPhoto()
    {
        return $this->cropPhoto;
    }

    /**
     * Текст описания сообщества.
     *
     * @return string
     */
    protected function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Идентификатор закрепленной записи.
     * Получить дополнительные данные о записи можно методом wall.getById,
     * передав в поле posts {group_id}{post_id}.
     *
     * @return int
     */
    protected function getFixedPost(): int
    {
        return $this->fixedPost;
    }

    /**
     * Информация о том, установлена ли у сообщества главная фотография.
     * Возможные значения:
     * 1 — установлена;
     * 0 — не установлена.
     *
     * @return int
     */
    protected function getHasPhoto(): int
    {
        return $this->hasPhoto;
    }

    /**
     * Информация о том, находится ли сообщество в закладках у текущего пользователя.
     * Возможные значения:
     * 1 — находится;
     * 0 — не находится.
     *
     * @return int
     */
    protected function getIsFavorite(): int
    {
        return $this->isFavorite;
    }

    /**
     * Информация о том, скрыто ли сообщество из ленты новостей текущего пользователя.
     * Возможные значения:
     * 1 — скрыто;
     * 0 — не скрыто.
     *
     * @return int
     */
    protected function getIsHiddenFromFeed(): int
    {
        return $this->isHiddenFromFeed;
    }

    /**
     * Информация о том, заблокированы ли сообщения
     * от этого сообщества (для текущего пользователя).
     *
     * @return int
     */
    protected function getIsMessagesBlocked(): int
    {
        return $this->isMessagesBlocked;
    }

    /**
     * Информация из блока ссылок сообщества.
     * Поле возвращается только при запросе данных об одном сообществе.
     * Массив объектов, каждый из которых содержит следующие поля:
     * id (integer) — идентификатор ссылки;
     * url (string) — URL;
     * name (string) — название ссылки;
     * desc (string) — описание ссылки;
     * photo_50 (string) — URL изображения-превью шириной 50px;
     * photo_100 (string) — URL изображения-превью шириной 100px.
     *
     * @return Links
     */
    protected function getLinks(): Links
    {
        return $this->links;
    }

    /**
     * Идентификатор основного фотоальбома.
     *
     * @return int
     */
    protected function getMainAlbumId(): int
    {
        return $this->mainAlbumId;
    }

    /**
     * Информация о главной секции. Возможные значения:
     * 0 — отсутствует;
     * 1 — фотографии;
     * 2 — обсуждения;
     * 3 — аудиозаписи;
     * 4 — видеозаписи;
     * 5 — товары.
     *
     * @return int
     */
    protected function getMainSection(): int
    {
        return $this->mainSection;
    }

    /**
     * Информация о магазине.
     * Объект, содержащий следующие поля:
     * enabled (integer) — информация о том, включен ли блок товаров в сообществе.
     * Возможные значения:
     * 1 — включен;
     * 0 — выключен. Если enabled = 0, объект не содержит других полей.
     * type (string) — информация о типе магазина.
     * Возвращается, если в группе включен раздел "Товары".
     * Возможные значения:
     * basic — базовые товары;
     * advanced — расширенные товары.
     * price_min (integer) — минимальная цена товаров;
     * price_max (integer)— максимальная цена товаров;
     * main_album_id (integer) — идентификатор главной подборки товаров;
     * contact_id (integer) — идентификатор контактного лица для связи с продавцом.
     * Возвращается отрицательное значение, если для связи с продавцом используются сообщения сообщества;
     * currency (object) — информация о валюте.
     * Объект, содержащий поля:
     * id (integer) — идентификатор валюты;
     * name (string) — символьное обозначение;
     * currency_text (string) — строковое обозначение.
     *
     * @return mixed
     */
    protected function getMarket()
    {
        return $this->market;
    }

    /**
     * Требуется scope = groups.
     * Статус участника текущего пользователя.
     * Возможные значения:
     * 0 — не является участником;
     * 1 — является участником;
     * 2 — не уверен, что посетит мероприятие;
     * 3 — отклонил приглашение;
     * 4 — запрос на вступление отправлен;
     * 5 — приглашен.
     *
     * @return int
     */
    protected function getMemberStatus(): int
    {
        return $this->memberStatus;
    }

    /**
     * Количество участников в сообществе.
     *
     * @return int
     */
    protected function getMembersCount(): int
    {
        return $this->membersCount;
    }

    /**
     * Место, указанное в информации о сообществе.
     * Объект, содержащий следующие поля:
     * id (integer) — идентификатор места;
     * title (string) — название места;
     * latitude (number) — географическая широта в градусах (от -90 до 90);
     * longitude (number) — географическая долгота в градусах (от -180 до 180);
     * type (string) — тип места;
     * country (integer) — идентификатор страны;
     * city (integer) — идентификатор города;
     * address (string) — адрес.
     *
     * @return mixed
     */
    protected function getPlace()
    {
        return $this->place;
    }

    /**
     * Возвращается для публичных страниц.
     * Текст описания для поля startDate.
     *
     * @return string
     */
    protected function getPublicDateLabel(): string
    {
        return $this->publicDateLabel;
    }

    /**
     * Адрес сайта из поля «веб-сайт» в описании сообщества.
     *
     * @return string
     */
    protected function getSite(): string
    {
        return $this->site;
    }

    /**
     * Для встреч содержит время начала встречи в формате unixtime.
     *
     * @return int
     */
    protected function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * Для встреч содержит время окончания встречи в формате unixtime.
     * Для публичных страниц содержит только время начала — дата основания в формате YYYYMMDD.
     *
     * @return int
     */
    protected function getFinishDate(): int
    {
        return $this->finishDate;
    }

    /**
     * Статус сообщества.
     *
     * @return string
     */
    protected function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Информация о том, есть ли у сообщества «огонёк».
     *
     * @return int
     */
    protected function getTrending(): int
    {
        return $this->trending;
    }

    /**
     * Информация о том, верифицировано ли сообщество.
     * Возможные значения:
     * 1 — является;
     * 0 — не является.
     *
     * @return int
     */
    protected function getVerified(): int
    {
        return $this->verified;
    }

    /**
     * Стена.
     * Возможные значения:
     * 0 — выключена;
     * 1 — открытая;
     * 2 — ограниченная;
     * 3 — закрытая.
     *
     * @return int
     */
    protected function getWall(): int
    {
        return $this->wall;
    }

    /**
     * Название главной вики-страницы.
     *
     * @return string
     */
    protected function getWikiPage(): string
    {
        return $this->wikiPage;
    }

    #endregion
}
