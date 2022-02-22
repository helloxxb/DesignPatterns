<?php

use Behavioral\NullObject\NullLogger;
use Behavioral\NullObject\PrintLogger;
use Behavioral\NullObject\Service;

require '../../vendor/autoload.php';

$service = new Service(new NullLogger());
$service->doSomething();

echo PHP_EOL . '------' . PHP_EOL;

$service = new Service(new PrintLogger());
$service->doSomething();
