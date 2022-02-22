<?php

namespace Structural\Bridge;

/**
 * HelloWorldService
 *
 * @package Structural\Bridge
 */
class HelloWorldService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('Hello world' . time());
    }
}
