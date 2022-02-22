<?php

use Creational\Prototype\BarBookPrototype;
use Creational\Prototype\FooBookPrototype;

require '../../vendor/autoload.php';

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();
for ($i = 0; $i < 10; $i++) {
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No ' . $i);
    var_dump($book);
}

for ($i = 0; $i < 5; $i++) {
    $book = clone $barPrototype;
    $book->setTitle('Bar Book No ' . $i);
    var_dump($book);
}
