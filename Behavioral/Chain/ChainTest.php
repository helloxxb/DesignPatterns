<?php

require '../../vendor/autoload.php';

use Behavioral\Chain\Responsible\HttpInMemoryCacheHandler;
use Behavioral\Chain\Responsible\SlowDatabaseHandler;

$chain = new HttpInMemoryCacheHandler(
    ['/foo/bar?index=1' => 'Hello In Memory!'],
    new SlowDatabaseHandler()
);
echo $chain->handle();

$chain = new HttpInMemoryCacheHandler(
    ['/foo/bar?index=1&lang=en' => 'Hello In Memory!'],
    new SlowDatabaseHandler()
);
echo $chain->handle();
