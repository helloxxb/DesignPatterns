<?php

use More\Delegation\JuniorDeveloper;
use More\Delegation\TeamLead;

require '../../vendor/autoload.php';

$junior = new JuniorDeveloper();
$teamLead = new TeamLead($junior);
echo $teamLead->writeCode();
