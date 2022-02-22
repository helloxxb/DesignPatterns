<?php

use Structural\Bridge\HelloWorldService;
use Structural\Bridge\HtmlFormatter;
use Structural\Bridge\PlainTextFormatter;

require '../../vendor/autoload.php';

$service = (new HelloWorldService())->setImplementation(new PlainTextFormatter());
var_dump($service->get());

$service = (new HelloWorldService())->setImplementation(new HtmlFormatter());
var_dump($service->get());
