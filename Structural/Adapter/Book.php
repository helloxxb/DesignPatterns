<?php

namespace Structural\Adapter;

/**
 * Book
 *
 * @package Structural\Adapter
 */
interface Book
{
    public function turnPage();
    
    public function open();
    
    public function getPage(): int;
}
