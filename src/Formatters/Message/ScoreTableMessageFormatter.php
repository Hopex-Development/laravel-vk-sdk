<?php

namespace Hopex\VkSdk\Formatters\Message;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Player;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Statistics;
use Throwable;

/**
 * Class ScoreTableMessageFormatter
 * @package Hopex\VkSdk\Formatters\Message
 */
class ScoreTableMessageFormatter implements CanFormatContract
{
    /**
     * @inheritDoc
     * @throws Throwable
     */
    public function format($data): string
    {
        $scoreTable = $data['score_table'];
        $row = $data['row'];
        $footer = $data['footer'];

        /** @var Statistics $statistics */
        $statistics = $data['stats'];

        if ($statistics->getPlayersCount() < 1) {
            $scoreTable = array_merge($scoreTable, [
                __('vk-sdk.There are no players on the server!')
            ]);
        } else {
            /** @var Player $player */
            foreach ($statistics->getPlayers() as $player) {
                $scoreTable = array_merge($scoreTable, [
                    str_replace([
                        '%COMMAND%',
                        '%NIK%',
                        '%SCORE%',
                        '%TIME%',
                        '%MUTE%'
                    ], [
                        $player->getTeam(),
                        $player->getName(),
                        sprintf('%d/%d', $player->getKills(), $player->getDeaths()),
                        $player->getTime('H:i:s'),
                        ($player->isMute() ? '| 🔇' : '')
                    ], $row)
                ]);
            }

            sort($scoreTable);
            foreach ($scoreTable as $index => $item) {
                if (preg_match('~(^.*)(3S|4N)~', $item)) {
                    $scoreTable = array_merge(array_slice($scoreTable, 0, $index), [
                        $footer
                    ], array_slice($scoreTable, $index, count($scoreTable)));
                    break;
                }
            }
            $scoreTable = array_map(function ($item) {
                return preg_replace('~(^.*)(\d)(C|T|S|N)~m', '$1$3', $item);
            }, $scoreTable);
        }

        return str_replace([
            '%MAP%',
            '%TOTAL%',
            '%ALIVE%'
        ], [
            $statistics->getMap(),
            $statistics->getPlayersCount() + $statistics->getBots(),
            $statistics->getPlayersCount()
        ],
            implode('', $scoreTable)
        );
    }
}
