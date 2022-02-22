<?php

use Creational\StaticFactory\StaticFactory;

require '../../vendor/autoload.php';

echo StaticFactory::factory('number')->format('123456789') . PHP_EOL;

echo StaticFactory::factory('string')->format('123456789') . PHP_EOL;
