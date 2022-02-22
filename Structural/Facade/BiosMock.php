<?php

namespace Structural\Facade;

/**
 * BiosMock
 *
 * @package Structural\Facade
 */
class BiosMock implements Bios
{
    public function execute()
    {
        echo self::class . '|' . '执行了一些事情' . PHP_EOL;
    }
    
    public function waitForKeyPress()
    {
        echo self::class . '|' . '等待密码输入中...' . PHP_EOL;
    }
    
    public function launch(OperatingSystem $os)
    {
        echo self::class . '|' . $os->getName() . ' 正在登陆中...' . PHP_EOL;
    }
    
    public function powerDown()
    {
        echo self::class . '|正在关机中...' . PHP_EOL;
    }
}
