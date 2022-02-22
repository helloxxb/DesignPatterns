<?php

namespace Structural\Facade;

/**
 * Interface Bios
 *
 * @package Structural\Facade
 */
interface Bios
{
    public function execute();
    
    public function waitForKeyPress();
    
    public function launch(OperatingSystem $os);
    
    public function powerDown();
}
