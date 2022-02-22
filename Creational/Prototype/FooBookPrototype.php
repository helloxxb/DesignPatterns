<?php

namespace Creational\Prototype;

/**
 * FooBookPrototype
 *
 * @package Creational\Prototype
 */
class FooBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected string $category = 'Foo';
    
    public function __clone()
    {
    }
}
