<?php

use Behavioral\Memento\State;
use Behavioral\Memento\Ticket;

require '../../vendor/autoload.php';

$ticket = new Ticket();
echo '刚刚创建时的状态: ' . $ticket->getState() . PHP_EOL . PHP_EOL;

// 打开 ticket
$ticket->open();
$openedState = $ticket->getState();
echo '打开后的状态: ' . $ticket->getState() . PHP_EOL . PHP_EOL;

// 存储状态
$memento = $ticket->saveToMemento();

// 分配 ticket
$ticket->assign();
echo '分配后的状态: ' . $ticket->getState() . PHP_EOL . PHP_EOL;

// 现在已经恢复到已打开的状态，但需要验证是否已经克隆了当前状态作为副本
$ticket->restoreFromMemento($memento);
echo '恢复后的状态: ' . $ticket->getState() . PHP_EOL . PHP_EOL;
echo $openedState . '===' . $ticket->getState() . PHP_EOL;
