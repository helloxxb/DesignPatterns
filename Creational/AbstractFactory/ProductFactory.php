<?php

namespace Creational\AbstractFactory;

/**
 * ProductFactory
 *
 * @package Creational\AbstractFactory
 */
class ProductFactory
{
    const SHIPPING_COSTS = 50;
    
    public function createShippableProduct(int $price): ShippableProduct
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }
    
    public function createDigitalProduct(int $price): DigitalProduct
    {
        return new DigitalProduct($price);
    }
}
