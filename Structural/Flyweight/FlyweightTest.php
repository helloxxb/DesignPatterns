<?php

use Structural\Flyweight\Example1\FlyweightFactory;
use Structural\Flyweight\Example2\TextFactory;

require '../../vendor/autoload.php';

$characters = [
    // 'a', 'b', 'c', 'd', 'e',
    // 'f', 'g', 'h', 'i', 'j',
    // 'k', 'l', 'm', 'n', 'o',
    // 'p', 'q', 'r', 's', 't',
    // 'u', 'v', 'w', 'x', 'y',
    'z'
];
$fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

$factory = new FlyweightFactory();
foreach ($characters as $char) {
    foreach ($fonts as $font) {
        $flyweight = $factory->get($char);
        $rendered = $flyweight->render($font);
        echo $rendered . PHP_EOL;
    }
}

echo '--------' . PHP_EOL;

$factory = new TextFactory();
foreach ($characters as $char) {
    foreach ($fonts as $font) {
        $flyweight = $factory->get($char);
        $rendered = $flyweight->render($font);
        echo $rendered . PHP_EOL;
    }
}
foreach ($fonts as $word) {
    $flyweight = $factory->get($word);
    $rendered = $flyweight->render('foobar');
    echo $rendered . PHP_EOL;
}
