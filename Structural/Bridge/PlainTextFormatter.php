<?php

namespace Structural\Bridge;

/**
 * PlainTextFormatter
 *
 * @package Structural\Bridge
 */
class PlainTextFormatter implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}
