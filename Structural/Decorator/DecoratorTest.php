<?php

use Structural\Decorator\Example1\JsonRenderer;
use Structural\Decorator\Example1\Webservice;
use Structural\Decorator\Example1\XmlRenderer;
use Structural\Decorator\Example2\DoubleRoomBooking;
use Structural\Decorator\Example2\ExtraBed;
use Structural\Decorator\Example2\WiFi;

require '../../vendor/autoload.php';

$service = new Webservice('foobar');
$service = new JsonRenderer($service);
echo $service->renderData() . PHP_EOL;

$service = new XmlRenderer($service);
echo $service->renderData() . PHP_EOL;

echo '--------' . PHP_EOL;

$booking = new DoubleRoomBooking();
echo $booking->calculatePrice() . PHP_EOL;
echo $booking->getDescription() . PHP_EOL . PHP_EOL;

// 装饰之后
$booking = new DoubleRoomBooking();
$booking = new WiFi($booking);
echo $booking->calculatePrice() . PHP_EOL;
echo $booking->getDescription() . PHP_EOL . PHP_EOL;

$booking = new DoubleRoomBooking();
$booking = new WiFi($booking);
$booking = new ExtraBed($booking);
echo $booking->calculatePrice() . PHP_EOL;
echo $booking->getDescription() . PHP_EOL . PHP_EOL;
