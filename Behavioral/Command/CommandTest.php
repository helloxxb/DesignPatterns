<?php

use Behavioral\Command\AddMessageDateCommand;
use Behavioral\Command\HelloCommand;
use Behavioral\Command\Invoker;
use Behavioral\Command\Receiver;

require '../../vendor/autoload.php';

$invoker = new Invoker();
$receiver = new Receiver();

$invoker->setCommand(new HelloCommand($receiver));
$invoker->run();
echo $receiver->getOutput() . PHP_EOL . PHP_EOL;

$messageCommand = new AddMessageDateCommand($receiver);
$messageCommand->execute();
$invoker->run();
echo $receiver->getOutput() . PHP_EOL . PHP_EOL;

$messageCommand->undo();
$invoker->run();
echo $receiver->getOutput() . PHP_EOL . PHP_EOL;
