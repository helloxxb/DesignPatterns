<?php

namespace Creational\StaticFactory;

/**
 * FormatString
 *
 * @package Creational\StaticFactory
 */
class FormatString implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}
