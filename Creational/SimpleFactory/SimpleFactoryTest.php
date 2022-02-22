<?php

use Creational\SimpleFactory\SimpleFactory;

require '../../vendor/autoload.php';

$factory = new SimpleFactory();
echo $factory->createBicycle()->driveTo('Paris') . PHP_EOL;
