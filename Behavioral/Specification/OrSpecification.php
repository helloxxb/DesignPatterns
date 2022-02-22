<?php

namespace Behavioral\Specification;

/**
 * OrSpecification
 *
 * @package Behavioral\Specification
 */
class OrSpecification implements Specification
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
     * 如果有一条规则符合条件，返回 true，否则返回 false
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }
    
        return false;
    }
}
