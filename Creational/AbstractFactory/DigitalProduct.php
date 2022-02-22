<?php

namespace Creational\AbstractFactory;

/**
 * DigitalProduct
 *
 * @package Creational\AbstractFactory
 */
class DigitalProduct implements Product
{
    /**
     * @var int
     */
    private int $price;
    
    public function __construct(int $price)
    {
        $this->price = $price;
    }
    
    public function calculatePrice(): int
    {
        return $this->price;
    }
}
