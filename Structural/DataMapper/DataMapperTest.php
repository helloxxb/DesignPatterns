<?php

use Structural\DataMapper\StorageAdapter;
use Structural\DataMapper\User;
use Structural\DataMapper\UserMapper;

require '../../vendor/autoload.php';

$storage = new StorageAdapter([
    1 => [
        'username' => 'tom',
        'email' => 'liebler.tom@gmail.com'
    ],
    2 => [
        'username' => 'tony',
        'email' => 'liebler.tony@gmail.com'
    ]
]);
$mapper = new UserMapper($storage);
$user = $mapper->findById(1);
var_dump($user);
