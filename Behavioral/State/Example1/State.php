<?php

namespace Behavioral\State\Example1;

/**
 * State
 *
 * @package Behavioral\State\Example1
 */
interface State
{
    public function proceedToNext(OrderContext $context);
    
    public function toString(): string;
}
