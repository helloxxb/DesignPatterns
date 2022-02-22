<?php

namespace Creational\FactoryMethod;

/**
 * StdoutLoggerFactory
 *
 * @package Creational\FactoryMethod
 */
class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
