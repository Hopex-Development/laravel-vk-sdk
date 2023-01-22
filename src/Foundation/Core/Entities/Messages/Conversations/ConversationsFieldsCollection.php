<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages\Conversations;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;
use Illuminate\Support\Collection;

/**
 * Class ConversationsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages\Conversations
 */
class ConversationsFieldsCollection extends DatabaseCollection
{
    protected string $fieldType = ConversationField::class;
}
