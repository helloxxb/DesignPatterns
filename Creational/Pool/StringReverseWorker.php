<?php

namespace Creational\Pool;

use DateTime;

/**
 * StringReverseWorker
 *
 * @package Creational\Pool
 */
class StringReverseWorker
{
    /**
     * @var DateTime
     */
    private DateTime $createdAt;
    
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }
    
    public function run(string $text)
    {
        // 反转字符串
        return strrev($text);
    }
}
