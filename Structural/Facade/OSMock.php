<?php

namespace Structural\Facade;

/**
 * OSMock
 *
 * @package Structural\Facade
 */
class OSMock implements OperatingSystem
{
    public function halt()
    {
        echo self::class .'|'. $this->getName() . ' 正在关机中...' . PHP_EOL;
    }
    
    public function getName(): string
    {
        return 'Linux';
    }
}
