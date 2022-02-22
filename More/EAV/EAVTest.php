<?php

use More\EAV\Attribute;
use More\EAV\Entity;
use More\EAV\Value;

require '../../vendor/autoload.php';


$colorAttribute = new Attribute('color');
$colorSilver = new Value($colorAttribute, 'silver');
$colorBlack = new Value($colorAttribute, 'black');

$memoryAttribute = new Attribute('memory');
$memory8Gb = new Value($memoryAttribute, '8GB');

$entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

var_dump(
    (string)$entity
);
