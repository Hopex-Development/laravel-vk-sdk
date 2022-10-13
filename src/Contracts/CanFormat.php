<?php

namespace Hopex\VkSdk\Contracts;

interface CanFormat
{
    /**
     * @param $data
     * @return string
     */
    public function format($data);
}
