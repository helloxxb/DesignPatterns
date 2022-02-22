<?php

use Behavioral\TemplateMethod\BeachJourney;
use Behavioral\TemplateMethod\CityJourney;

require '../../vendor/autoload.php';

$beachJourney = new BeachJourney();
$beachJourney->takeATrip();
var_dump(
    $beachJourney->getThingsToDo()
);


$cityJourney = new CityJourney();
$cityJourney->takeATrip();
var_dump(
    $cityJourney->getThingsToDo()
);
