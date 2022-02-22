<?php

namespace Behavioral\Strategy;

/**
 * Comparator
 *
 * @package Behavioral\Strategy
 */
interface Comparator
{
    public function compare($a, $b): int;
}
