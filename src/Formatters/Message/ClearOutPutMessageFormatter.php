<?php

namespace Hopex\VkSdk\Formatters\Message;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Facades\SdkConfig;

/**
 * Class ClearOutPutMessageFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage
 */
class ClearOutPutMessageFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     */
    public function format($data): string
    {
        $replacement = SdkConfig::query('replacement');
        $forbidden = implode('|', $replacement['forbidden']);
        return preg_replace("~$forbidden~", $replacement['replace_to'], $data);
    }
}
