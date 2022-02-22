<?php

namespace Structural\Decorator\Example2;

/**
 * Booking
 *
 * @package Structural\Decorator\Example2
 */
interface Booking
{
    public function calculatePrice(): int;
    
    public function getDescription(): string;
}
