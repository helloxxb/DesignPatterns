<?php

namespace Behavioral\NullObject;

/**
 * PrintLogger
 *
 * @package Behavioral\NullObject
 */
class PrintLogger implements Logger
{
    public function log(string $str)
    {
        echo $str;
    }
}
