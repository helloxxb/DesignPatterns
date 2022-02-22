<?php

use Behavioral\Mediator\Example1\Ui;
use Behavioral\Mediator\Example1\UserRepository;
use Behavioral\Mediator\Example1\UserRepositoryUiMediator;
use Behavioral\Mediator\Example2\RequestMediator;
use Behavioral\Mediator\Example2\Subsystem\Client;
use Behavioral\Mediator\Example2\Subsystem\Database;
use Behavioral\Mediator\Example2\Subsystem\Server;

require '../../vendor/autoload.php';

$mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
$mediator->printInfoAbout('Dominik');

echo PHP_EOL . '--------' . PHP_EOL;

$mediator = new RequestMediator(new Server(), new Database(), new Client());
$mediator->makeRequest();
