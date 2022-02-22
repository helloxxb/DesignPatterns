<?php

use Behavioral\Observer\Example1;
use Behavioral\Observer\Example2;

require '../../vendor/autoload.php';

$observer = new Example1\UserObserver();
$user = new Example1\User();
$user->attach($observer);
$user->changeEmail('foo@bar.com');
var_dump(count($observer->getChangedUsers()));


$user = new Example2\UserList();
$user->attach(new Example2\LoggerObserver());
$user->addCustomer('foo@bar.com');
