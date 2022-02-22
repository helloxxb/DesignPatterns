<?php

namespace Creational\Builder\Parts;

/**
 * Door
 *
 * @package Creational\Builder\Parts
 */
class Door extends Part
{
    private string $color;
    
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    
    /**
     * @param string $color
     * @return Door
     */
    public function setColor(string $color): Door
    {
        $this->color = $color;
        return $this;
    }
}
