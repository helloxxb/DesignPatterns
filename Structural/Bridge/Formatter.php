<?php

namespace Structural\Bridge;

/**
 * Formatter
 *
 * @package Structural\Bridge
 */
interface Formatter
{
    public function format(string $input): string;
}
