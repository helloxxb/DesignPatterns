<?php

namespace Creational\Builder\Parts;

/**
 * Engine
 *
 * @package Creational\Builder\Parts
 */
class Engine extends Part
{
    private string $type;
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    
    /**
     * @param string $type
     * @return Engine
     */
    public function setType(string $type): Engine
    {
        $this->type = $type;
        return $this;
    }
}
