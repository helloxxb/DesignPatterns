<?php

namespace Structural\Proxy\Example2;

/**
 * BankAccount
 *
 * @package Structural\Proxy\Example2
 */
interface BankAccount
{
    public function deposit(int $amount);
    
    public function getBalance(): int;
}
