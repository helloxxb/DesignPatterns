<?php

namespace Behavioral\Strategy;

/**
 * IdComparator
 *
 * @package Behavioral\Strategy
 */
class IdComparator implements Comparator
{
    public function compare($a, $b): int
    {
        /**
         * 太空船运算符（组合比较符）
         * https://www.php.net/manual/zh/language.operators.comparison.php
         */
        return $a['id'] <=> $b['id'];
    }
}
