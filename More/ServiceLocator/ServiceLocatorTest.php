<?php

use More\ServiceLocator\LogService;
use More\ServiceLocator\ServiceLocator;

require '../../vendor/autoload.php';

$serviceLocator = new ServiceLocator();

// $serviceLocator->addInstance(LogService::class, new LogService());
// var_dump($serviceLocator->has(LogService::class));


$serviceLocator->addClass(LogService::class, [['uri' => '/foo/bar?index=1']]);
$logger = $serviceLocator->get(LogService::class);
$logger->doSomething();
var_dump($logger, $serviceLocator->has(LogService::class));
