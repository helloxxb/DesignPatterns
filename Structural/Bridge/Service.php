<?php

namespace Structural\Bridge;

/**
 * Service
 *
 * @package Structural\Bridge
 */
abstract class Service
{
    protected Formatter $implementation;
    
    /**
     * @param Formatter $implementation
     * @return Service
     */
    public function setImplementation(Formatter $implementation): Service
    {
        $this->implementation = $implementation;
        return $this;
    }
    
    abstract public function get(): string;
}
