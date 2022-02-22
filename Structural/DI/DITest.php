<?php

use Structural\DI\Configuration;
use Structural\DI\Connection;

require '../../vendor/autoload.php';

$config = new Configuration('127.0.0.1', 3306, 'test', 'test123');
$connection = new Connection($config);
echo $connection->getDsn() . PHP_EOL;
