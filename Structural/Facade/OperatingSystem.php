<?php

namespace Structural\Facade;

/**
 * OperatingSystem
 *
 * @package Structural\Facade
 */
interface OperatingSystem
{
    public function halt();
    
    public function getName(): string;
}
