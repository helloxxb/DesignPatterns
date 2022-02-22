<?php

namespace Structural\Proxy\Example2;

/**
 * BankAccountProxy
 *
 * @package Structural\Proxy\Example2
 */
class BankAccountProxy extends HeavyBankAccount
{
    /**
     * @var int|null
     */
    private ?int $balance = null;
    
    public function getBalance(): int
    {
        // because calculating balance is so expensive,
        // the usage of BankAccount::getBalance() is delayed until it really is needed
        // and will not be calculated again for this instance
        
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }
        
        return $this->balance;
    }
}
