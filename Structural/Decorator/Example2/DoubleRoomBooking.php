<?php

namespace Structural\Decorator\Example2;

/**
 * DoubleRoomBooking
 *
 * @package Structural\Decorator\Example2
 */
class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 40;
    }
    
    public function getDescription(): string
    {
        return 'double room';
    }
}
