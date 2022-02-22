<?php

namespace Creational\AbstractFactory;

/**
 * ShippableProduct
 *
 * @package Creational\AbstractFactory
 */
class ShippableProduct implements Product
{
    /**
     * @var int
     */
    private int $productPrice;
    /**
     * @var int
     */
    private int $shippingCosts;
    
    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }
    
    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}
