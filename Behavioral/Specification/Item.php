<?php

namespace Behavioral\Specification;

/**
 * Item
 *
 * @package Behavioral\Specification
 */
class Item
{
    private float $price;
    
    public function __construct(float $price)
    {
        $this->price = $price;
    }
    
    public function getPrice(): float
    {
        return $this->price;
    }
}
