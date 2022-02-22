<?php

use Behavioral\Visitor\RecordingVisitor;
use Behavioral\Visitor\User;
use Behavioral\Visitor\Group;

require '../../vendor/autoload.php';

$visitor = new RecordingVisitor();

// $visitor->visitUser(new User('Dominik'));
// $visitor->visitGroup(new Group('Administrators'));
// var_dump(
//     $visitor->getVisited(),
//     $visitor->getVisited()[1]->getName(),
// );

$userRole = new User('Dominik');
$userRole->accept($visitor);
$groupRole = new Group('Administrators');
$groupRole->accept($visitor);
var_dump(
    $visitor->getVisited(),
    $visitor->getVisited()[0]->getName(),
);
