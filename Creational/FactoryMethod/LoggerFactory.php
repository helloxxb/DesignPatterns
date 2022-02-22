<?php

namespace Creational\FactoryMethod;

/**
 * LoggerFactory
 *
 * @package Creational\FactoryMethod
 */
interface LoggerFactory
{
    public function createLogger(): Logger;
}
