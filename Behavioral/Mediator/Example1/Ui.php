<?php

namespace Behavioral\Mediator\Example1;

/**
 * Ui
 *
 * @package Behavioral\Mediator\Example1
 */
class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}
