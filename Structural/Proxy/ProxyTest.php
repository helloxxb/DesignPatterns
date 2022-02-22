<?php

use Structural\Proxy\Example1\RecordProxy;
use Structural\Proxy\Example2\BankAccountProxy;

require '../../vendor/autoload.php';

$data = [];
$proxy = new RecordProxy($data);
$proxy->xyz = 'xyz';
var_dump($proxy);


$bankAccount = new BankAccountProxy();
$bankAccount->deposit(30);
// this time balance is being calculated
echo $bankAccount->getBalance() . PHP_EOL;
// inheritance allows for BankAccountProxy to behave to an outsider exactly like ServerBankAccount
$bankAccount->deposit(50);
// this time the previously calculated balance is returned again without re-calculating it
echo $bankAccount->getBalance() . PHP_EOL;
