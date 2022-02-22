<?php

namespace Behavioral\State\Example2;

/**
 * OrderContext
 *
 * @package Behavioral\State\Example2
 */
class OrderContext extends StateOrder
{
    /**
     * @return StateOrder
     */
    public static function getState(): StateOrder
    {
        return self::$state;
    }
    
    /**
     * @param StateOrder $state
     */
    public static function setState(StateOrder $state): void
    {
        self::$state = $state;
    }
    
    public function done()
    {
        (self::$state)->done();
    }
    
    public function getStatus(): string
    {
        return (self::$state)->getStatus();
    }
}
