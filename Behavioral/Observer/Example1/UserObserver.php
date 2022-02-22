<?php

namespace Behavioral\Observer\Example1;

use SplObserver;
use SplSubject;

/**
 * UserObserver
 *
 * @package Behavioral\Observer\Example1
 */
class UserObserver implements SplObserver
{
    /**
     * @var SplSubject[]
     */
    private array $changedUsers = [];
    
    /**
     * 它通常使用 SplSubject::notify() 通知主体
     * @param User|SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        echo $subject->email . PHP_EOL;
        $this->changedUsers[] = clone $subject;
    }
    
    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
