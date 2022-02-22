<?php

namespace Behavioral\Observer\Example2;

use SplObserver;
use SplSubject;

/**
 * LoggerObserver
 *
 * @package Behavioral\Observer\Example2
 */
class LoggerObserver implements SplObserver
{
    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        /* @var UserList $subject*/
        var_dump($subject->name . ': added to user list');
    }
}
