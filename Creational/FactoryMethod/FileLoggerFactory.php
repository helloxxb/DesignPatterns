<?php

namespace Creational\FactoryMethod;

/**
 * FileLoggerFactory
 *
 * @package Creational\FactoryMethod
 */
class FileLoggerFactory implements LoggerFactory
{
    private string $filepath;
    
    /**
     * FileLoggerFactory constructor.
     * @param string $filepath
     */
    public function __construct(string $filepath)
    {
        $this->filepath = $filepath;
    }
    
    public function createLogger(): Logger
    {
        return (new FileLogger())->setFilepath($this->filepath);
    }
}
