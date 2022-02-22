<?php

namespace Creational\Prototype;

/**
 * BookPrototype
 *
 * @package Creational\Prototype
 */
abstract class BookPrototype
{
    /**
     * @var string
     */
    protected string $title;
    
    /**
     * @var string
     */
    protected string $category;
    
    abstract public function __clone();
    
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    
    /**
     * @param string $title
     * @return BookPrototype
     */
    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;
        return $this;
    }
}
