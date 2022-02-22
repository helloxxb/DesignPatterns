<?php

namespace Structural\Proxy\Example1;

use OutOfRangeException;

/**
 * Record
 *
 * @package Structural\Proxy\Example1
 */
class Record
{
    /**
     * @var string[]
     */
    private array $data;
    
    /**
     * @param string[] $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }
    
    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }
    
    public function __get(string $name): string
    {
        if (!isset($this->data[$name])) {
            throw new OutOfRangeException('Invalid name given');
        }
        
        return $this->data[$name];
    }
}
