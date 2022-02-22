<?php

require '../../vendor/autoload.php';

$truck = (new \Creational\Builder\Director())->build(new \Creational\Builder\TruckBuilder());
var_dump($truck->getDesc());

$cart = (new \Creational\Builder\Director())->build(new \Creational\Builder\CarBuilder());
var_dump($cart->getDesc());
