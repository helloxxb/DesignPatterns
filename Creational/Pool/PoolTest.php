<?php

use Creational\Pool\WorkerPool;

require '../../vendor/autoload.php';

// $pool = new WorkerPool();
// $worker1 = $pool->get();
// $worker2 = $pool->get();
// var_dump($pool->count(), $worker1, $worker2);

$pool = new WorkerPool();
$worker1 = $pool->get();
$pool->dispose($worker1);
$worker2 = $pool->get();
var_dump($pool->count(), $worker1, $worker2);
