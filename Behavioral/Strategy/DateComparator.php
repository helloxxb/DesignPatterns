<?php

namespace Behavioral\Strategy;

use DateTime;

/**
 * DateComparator
 *
 * @package Behavioral\Strategy
 */
class DateComparator implements Comparator
{
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);
        /**
         * 太空船运算符（组合比较符）
         * https://www.php.net/manual/zh/language.operators.comparison.php
         */
        return $aDate <=> $bDate;
    }
}
