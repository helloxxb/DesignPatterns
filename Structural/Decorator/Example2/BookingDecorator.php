<?php

namespace Structural\Decorator\Example2;

/**
 * BookingDecorator
 *
 * @package Structural\Decorator\Example2
 */
abstract class BookingDecorator implements Booking
{
    protected Booking $booking;
    
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
