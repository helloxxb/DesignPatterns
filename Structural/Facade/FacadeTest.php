<?php

use Structural\Facade\BiosMock;
use Structural\Facade\Facade;
use Structural\Facade\OSMock;

require '../../vendor/autoload.php';

$bios = new BiosMock();
$os = new OSMock();
$facade = new Facade($bios, $os);

// 门面接口很简单。
$facade->turnOn();
echo '------' . PHP_EOL;
$facade->turnOff();
