<?php

namespace Creational\Prototype;

/**
 * BarBookPrototype
 *
 * @package Creational\Prototype
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected string $category = 'Bar';
    
    public function __clone()
    {
    }
}
