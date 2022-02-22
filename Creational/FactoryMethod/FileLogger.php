<?php

namespace Creational\FactoryMethod;

/**
 * FileLogger
 *
 * @package Creational\FactoryMethod
 */
class FileLogger implements Logger
{
    private string $filepath;
    
    /**
     * @param string $filepath
     * @return FileLogger
     */
    public function setFilepath(string $filepath): FileLogger
    {
        $this->filepath = $filepath;
        return $this;
    }
    
    public function log(string $message)
    {
        file_put_contents($this->filepath, $message . PHP_EOL, FILE_APPEND);
    }
}
