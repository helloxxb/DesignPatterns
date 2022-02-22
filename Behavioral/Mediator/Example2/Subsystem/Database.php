<?php

namespace Behavioral\Mediator\Example2\Subsystem;

use Behavioral\Mediator\Example2\Colleague;

/**
 * Database
 *
 * @package Behavioral\Mediator\Example2\Subsystem
 */
class Database extends Colleague
{
    public function getData(): string
    {
        return 'World';
    }
}
