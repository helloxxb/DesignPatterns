<?php

use Structural\Registry\LoggerService;
use Structural\Registry\Registry;

require '../../vendor/autoload.php';

$key = Registry::LOGGER;

Registry::set($key, new LoggerService());

$logger = Registry::get($key);
var_dump($logger);

$logger = Registry::get($key);
var_dump($logger);
