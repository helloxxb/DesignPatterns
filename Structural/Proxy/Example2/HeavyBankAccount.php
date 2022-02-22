<?php

namespace Structural\Proxy\Example2;

/**
 * HeavyBankAccount
 *
 * @package Structural\Proxy\Example2
 */
class HeavyBankAccount implements BankAccount
{
    /**
     * @var int[]
     */
    private array $transactions = [];
    
    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }
    
    public function getBalance(): int
    {
        // this is the heavy part, imagine all the transactions even from
        // years and decades ago must be fetched from a database or web service
        // and the balance must be calculated from it
    
        return (int)array_sum($this->transactions);
    }
}
