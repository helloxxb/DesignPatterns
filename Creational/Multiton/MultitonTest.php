<?php

require '../../vendor/autoload.php';

$mysql = \Creational\Multiton\Multiton::getInstance(\Creational\Multiton\Multiton::INSTANCE_MYSQL);
$mysql->doSomething();

$sqlite = \Creational\Multiton\Multiton::getInstance(\Creational\Multiton\Multiton::INSTANCE_SQLITE);
$sqlite->doSomething();
