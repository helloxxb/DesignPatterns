<?php

namespace Structural\Composite;

/**
 * InputElement
 *
 * @package Structural\Composite
 */
class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
