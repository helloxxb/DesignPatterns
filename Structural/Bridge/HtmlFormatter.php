<?php

namespace Structural\Bridge;

/**
 * HtmlFormatter
 *
 * @package Structural\Bridge
 */
class HtmlFormatter implements Formatter
{
    public function format(string $input): string
    {
        return sprintf('<p>%s</p>', $input);
    }
}
