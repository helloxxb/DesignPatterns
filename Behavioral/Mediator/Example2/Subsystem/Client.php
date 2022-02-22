<?php

namespace Behavioral\Mediator\Example2\Subsystem;

use Behavioral\Mediator\Example2\Colleague;

/**
 * Client 类是一个发出请求并获得响应的客户端。
 *
 * @package Behavioral\Mediator\Example2\Subsystem
 */
class Client extends Colleague
{
    public function output(string $content): void
    {
        echo $content;
    }
}
