<?php

namespace Behavioral\State\Example2;

/**
 * CreateOrder
 *
 * @package Behavioral\State\Example2
 */
class CreateOrder extends StateOrder
{
    /**
     * CreateOrder constructor.
     */
    public function __construct()
    {
        $this->setStatus('created');
    }
    
    public function done()
    {
        static::$state = new ShippingOrder();
    }
}
