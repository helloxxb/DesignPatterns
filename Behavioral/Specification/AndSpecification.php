<?php

namespace Behavioral\Specification;

/**
 * AndSpecification
 *
 * @package Behavioral\Specification
 */
class AndSpecification implements Specification
{
    /**
     * @var Specification[]
     */
    private array $specifications;
    
    /**
     * @param Specification[] $specifications
     */
    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }
    
    /**
     * 如果有一条规则不符合条件，返回 false，否则返回 true
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }
    
        return true;
    }
}
