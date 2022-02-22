<?php

use Behavioral\State\Example1;
use Behavioral\State\Example2;
use Behavioral\State\Example3;

require '../../vendor/autoload.php';


$orderContext = Example1\OrderContext::create();
var_dump($orderContext->toString());

$orderContext = Example1\OrderContext::create();
$orderContext->proceedToNext();
var_dump($orderContext->toString());


$orderContext = Example1\OrderContext::create();
$orderContext->proceedToNext();
$orderContext->proceedToNext();
var_dump($orderContext->toString());


$orderContext = Example1\OrderContext::create();
$orderContext->proceedToNext();
$orderContext->proceedToNext();
$orderContext->proceedToNext();
var_dump($orderContext->toString());

echo '-----------' . PHP_EOL;


$orderContext = new Example2\OrderContext();
$orderContext->setState(new Example2\CreateOrder());
var_dump($orderContext->getStatus());


$orderContext = new Example2\OrderContext();
$orderContext->setState(new Example2\CreateOrder());
$orderContext->done();
var_dump($orderContext->getStatus());


$orderContext = new Example2\OrderContext();
$orderContext->setState(new Example2\ShippingOrder());
$orderContext->done();
var_dump($orderContext->getStatus());

echo '-----------' . PHP_EOL;

$work = new Example3\WorkContext();
var_dump(
    $work->proceedToNext(),
    date('Y-m-d H:i:s', time())
);
