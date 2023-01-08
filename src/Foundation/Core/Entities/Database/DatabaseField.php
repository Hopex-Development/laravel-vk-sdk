<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database;

use Illuminate\Support\Collection;

/**
 * Class DatabaseField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database
 */
abstract class DatabaseField
{
    public const ID = 'id';
    public const TITLE = 'title';

    /**
     * @var Collection
     */
    protected Collection $currentField;

    /**
     * @param array|Collection $currentField
     * @return DatabaseField
     */
    public function __invoke(array|Collection $currentField): DatabaseField
    {
        return $this->__construct($currentField);
    }

    /**
     * DatabaseField constructor.
     * @param array|Collection $currentField
     */
    public function __construct(array|Collection $currentField)
    {
        $this->currentField = $currentField instanceof Collection ? $currentField : collect($currentField);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->currentField->get(self::ID);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->currentField->get(self::TITLE);
    }
}
