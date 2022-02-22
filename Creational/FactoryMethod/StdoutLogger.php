<?php

namespace Creational\FactoryMethod;

/**
 * StdoutLogger
 *
 * @package Creational\FactoryMethod
 */
class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message . PHP_EOL;
    }
}
