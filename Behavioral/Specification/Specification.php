<?php

namespace Behavioral\Specification;

/**
 * Specification
 *
 * @package Behavioral\Specification
 */
interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}
