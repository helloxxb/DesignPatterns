<?php

namespace Structural\Facade;

/**
 * Facade
 *
 * @package Structural\Facade
 */
class Facade
{
    private Bios $bios;
    private OperatingSystem $os;
    
    /**
     * Facade constructor.
     *
     * @param Bios $bios
     * @param OperatingSystem $os
     */
    public function __construct(Bios $bios, OperatingSystem $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }
    
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }
    
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
