<?php

use Structural\FluentInterface\QueryBuilder;

require '../../vendor/autoload.php';

$query = new QueryBuilder();
$query->select(['u.id', 'u.name', 'o.*'])
    ->from('users', 'u')
    ->from('orders', 'o')
    ->where('u.id = 1');
echo $query . PHP_EOL;
