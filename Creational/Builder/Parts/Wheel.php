<?php

namespace Creational\Builder\Parts;

/**
 * Wheel
 *
 * @package Creational\Builder\Parts
 */
class Wheel extends Part
{
    private string $tire;
    
    /**
     * @return string
     */
    public function getTire(): string
    {
        return $this->tire;
    }
    
    /**
     * @param string $tire
     * @return Wheel
     */
    public function setTire(string $tire): Wheel
    {
        $this->tire = $tire;
        return $this;
    }
}
