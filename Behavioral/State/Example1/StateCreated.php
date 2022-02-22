<?php

namespace Behavioral\State\Example1;

/**
 * StateCreated
 *
 * @package Behavioral\State\Example1
 */
class StateCreated implements State
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateShipped());
    }
    
    public function toString(): string
    {
        return 'created';
    }
}
