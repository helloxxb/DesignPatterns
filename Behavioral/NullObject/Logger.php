<?php

namespace Behavioral\NullObject;

/**
 * Key feature: NullLogger must inherit from this interface like any other loggers
 *
 * @package Behavioral\NullObject
 */
interface Logger
{
    public function log(string $str);
}
