<?php

namespace Behavioral\Observer\Example2;

use SplObserver;
use SplSubject;

/**
 * UserList
 *
 * @package Behavioral\Observer\Example2
 */
class UserList implements SplSubject
{
    public string $name;
    /**
     * @var SplObserver[]
     */
    private array $observers;
    
    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers[get_class($observer)] = $observer;
    }
    
    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        unset($this->observers[get_class($observer)]);
    }
    
    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $className => $observer) {
            $observer->update($this);
        }
    }
    
    public function addCustomer(string $name)
    {
        $this->name = $name;
        $this->notify();
    }
}
