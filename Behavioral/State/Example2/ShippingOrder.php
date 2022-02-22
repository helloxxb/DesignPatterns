<?php

namespace Behavioral\State\Example2;

/**
 * ShippingOrder
 *
 * @package Behavioral\State\Example2
 */
class ShippingOrder extends StateOrder
{
    /**
     * ShippingOrder constructor.
     */
    public function __construct()
    {
        $this->setStatus('shipped');
    }
    
    public function done()
    {
        $this->setStatus('done');
    }
}
