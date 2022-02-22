<?php

namespace Creational\StaticFactory;

/**
 * FormatNumber
 *
 * @package Creational\StaticFactory
 */
class FormatNumber implements Formatter
{
    public function format(string $input): string
    {
        return number_format((int)$input);
    }
}
