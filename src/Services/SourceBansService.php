<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Contracts\SourceBansServiceContract;
use Hopex\VkSdk\Exceptions\SourceBans\InvalidConnectionException;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Ban;
use Hopex\VkSdk\Foundation\Core\Entities\SourceBans\Admin;
use Illuminate\Database\Connection;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Class SourceBansService
 * @package Hopex\VkSdk\Foundation\Core\SourceBans
 */
class SourceBansService implements SourceBansServiceContract
{
    /** @var Connection */
    private Connection $connection;

    private const TABLE_ADMINS = 'admins';
    private const TABLE_BANS = 'bans';

    /**
     * SourceBansRepository constructor.
     * @throws Throwable
     */
    public function __construct()
    {
        throw_if(!config('database.connections.source-bans'), InvalidConnectionException::class);
        $this->connection = DB::connection('source-bans')
            ->setTablePrefix(config('database.connections.source-bans.prefix_tables'));
    }

    /**
     * @param string $table
     * @return Builder
     */
    private function query(string $table): Builder
    {
        return $this->connection->table($table);
    }

    /**
     * @return Collection
     */
    public function getBans(): Collection
    {
        return $this
            ->query(self::TABLE_BANS)
            ->get()
            ->map(function ($ban) {
                return new Ban($ban);
            });
    }

    /**
     * @return Collection
     */
    public function getAdmins(): Collection
    {
        return $this
            ->query(self::TABLE_ADMINS)
            ->get()
            ->map(function ($admin) {
                return new Admin($admin);
            });
    }
}
