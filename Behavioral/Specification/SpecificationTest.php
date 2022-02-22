<?php

use Behavioral\Specification\AndSpecification;
use Behavioral\Specification\Item;
use Behavioral\Specification\NotSpecification;
use Behavioral\Specification\OrSpecification;
use Behavioral\Specification\PriceSpecification;

require '../../vendor/autoload.php';

$spec1 = new PriceSpecification(50, 99);
$spec2 = new PriceSpecification(101, 200);
$orSpec = new OrSpecification($spec1, $spec2);

var_dump(
    $orSpec->isSatisfiedBy(new Item(100)),
    $orSpec->isSatisfiedBy(new Item(51)),
    $orSpec->isSatisfiedBy(new Item(150))
);
echo PHP_EOL .'-----'. PHP_EOL. PHP_EOL;


$spec1 = new PriceSpecification(50, 100);
$spec2 = new PriceSpecification(80, 200);
$andSpec = new AndSpecification($spec1, $spec2);

var_dump(
    $andSpec->isSatisfiedBy(new Item(150)),
    $andSpec->isSatisfiedBy(new Item(1)),
    $andSpec->isSatisfiedBy(new Item(51)),
    $andSpec->isSatisfiedBy(new Item(100))
);
echo PHP_EOL . '-----' . PHP_EOL . PHP_EOL;


$spec1 = new PriceSpecification(50, 100);
$notSpec = new NotSpecification($spec1);
var_dump(
    $notSpec->isSatisfiedBy(new Item(150)),
    $notSpec->isSatisfiedBy(new Item(50))
);
echo PHP_EOL . '-----' . PHP_EOL . PHP_EOL;
