<?php

namespace Behavioral\Strategy;

/**
 * Context
 *
 * @package Behavioral\Strategy
 */
class Context
{
    private Comparator $comparator;
    
    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }
    
    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);
        
        return array_values($elements);
    }
}
