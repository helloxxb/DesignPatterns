<?php

require '../../vendor/autoload.php';

$factory = new \Creational\AbstractFactory\ProductFactory();
$product = $factory->createDigitalProduct(150);
var_dump($product, $product->calculatePrice());

$factory = new \Creational\AbstractFactory\ProductFactory();
$product = $factory->createShippableProduct(150);
var_dump($product, $product->calculatePrice());
