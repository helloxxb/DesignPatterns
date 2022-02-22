<?php

namespace Structural\Adapter;

/**
 * EBookAdapter
 *
 * @package Structural\Adapter
 */
class EBookAdapter implements Book
{
    /**
     * @var EBook
     */
    protected EBook $eBook;
    
    /**
     * EBookAdapter constructor.
     * @param EBook $eBook
     */
    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }
    
    public function turnPage()
    {
        $this->eBook->pressNext();
    }
    
    public function open()
    {
        $this->eBook->unlock();
    }
    
    public function getPage(): int
    {
        /**
         * 注意这里适配器的行为：EBookInterface::getPage() 将返回两个整型，
         * BookInterface 仅支持获得当前页，所以我们这里只适配这个行为
         */
        return $this->eBook->getPage()[0];
    }
}
