<?php

require '../../vendor/autoload.php';

$stdout = new \Creational\FactoryMethod\StdoutLoggerFactory();
$stdout->createLogger()->log(time());

$file = new \Creational\FactoryMethod\FileLoggerFactory(__DIR__ . '/file.log');
$file->createLogger()->log(time());
