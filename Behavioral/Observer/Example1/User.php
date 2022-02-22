<?php

namespace Behavioral\Observer\Example1;

use SplObserver;
use SplObjectStorage;
use SplSubject;

/**
 * User 实现观察者模式 (称为主体)，它维护一个观察者列表，
 * 当对象发生变化时通知 User
 *
 * @package Behavioral\Observer\Example1
 */
class User implements SplSubject
{
    public string $email;
    private SplObjectStorage $observers;
    
    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }
    
    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    
    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    
    /**
     * @inheritDoc
     */
    public function notify()
    {
        /* @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    
    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}
