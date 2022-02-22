<?php

namespace Structural\Decorator\Example2;

/**
 * ExtraBed（装饰类）
 *
 * @package Structural\Decorator\Example2
 */
class ExtraBed extends BookingDecorator
{
    const PRICE = 30;
    
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }
    
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}
