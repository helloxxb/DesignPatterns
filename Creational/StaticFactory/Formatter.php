<?php

namespace Creational\StaticFactory;

/**
 * Formatter
 *
 * @package Creational\StaticFactory
 */
interface Formatter
{
    public function format(string $input): string;
}
