<?php

namespace Behavioral\Iterator;

/**
 * BookList
 *
 * @package Behavioral\Iterator
 */
class BookList implements \Countable, \Iterator
{
    /**
     * @var Book[]
     */
    private array $books = [];
    private int $currentIndex = 0;
    
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }
    
    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            echo 'BOOK: ' . $book->getAuthorAndTitle() . '<===>';
            echo 'REMOVE: ' . $bookToRemove->getAuthorAndTitle() . PHP_EOL;
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
                break; // 找到后应跳出循环
            }
        }
        
        $this->books = array_values($this->books);
    }
    
    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->books);
    }
    
    /**
     * @inheritDoc
     */
    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }
    
    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->currentIndex++;
    }
    
    /**
     * @inheritDoc
     */
    public function key(): int
    {
        return $this->currentIndex;
    }
    
    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }
    
    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->currentIndex = 0;
    }
}
