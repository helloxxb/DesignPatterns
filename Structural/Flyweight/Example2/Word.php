<?php

namespace Structural\Flyweight\Example2;

class Word implements Text
{
    private string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function render(string $font): string
    {
        return sprintf('Word %s with font %s', $this->name, $font);
    }
}
