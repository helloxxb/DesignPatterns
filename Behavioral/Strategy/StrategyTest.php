<?php

use Behavioral\Strategy\Context;
use Behavioral\Strategy\DateComparator;
use Behavioral\Strategy\IdComparator;

require '../../vendor/autoload.php';

$provideIntegers = [
    ['id' => 2], ['id' => 1], ['id' => 3]
];
$provideDates = [
    ['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']
];

$obj = new Context(new IdComparator());
$elements = $obj->executeStrategy($provideIntegers);
var_dump(json_encode($elements));


$obj = new Context(new DateComparator());
$elements = $obj->executeStrategy($provideDates);
var_dump(json_encode($elements));
