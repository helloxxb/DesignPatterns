<?php

namespace Creational\SimpleFactory;

/**
 * SimpleFactory
 *
 * @package Creational\SimpleFactory
 */
class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
