<?php

namespace Behavioral\NullObject;

/**
 * NullLogger
 *
 * @package Behavioral\NullObject
 */
class NullLogger implements Logger
{
    public function log(string $str)
    {
        // do nothing
        echo '此处应不做任何处理，仅做演示';
    }
}
