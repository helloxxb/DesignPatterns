<?php

namespace Behavioral\State\Example1;

/**
 * StateDone
 *
 * @package Behavioral\State\Example1
 */
class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
        // there is nothing more to do
    }
    
    public function toString(): string
    {
        return 'done';
    }
}
