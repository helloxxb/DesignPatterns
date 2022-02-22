<?php

namespace Behavioral\State\Example1;

/**
 * StateShipped
 *
 * @package Behavioral\State\Example1
 */
class StateShipped implements State
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateDone());
    }
    
    public function toString(): string
    {
        return 'shipped';
    }
}
