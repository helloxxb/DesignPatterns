<?php

namespace Behavioral\Mediator\Example1;

/**
 * Mediator
 *
 * @package Behavioral\Mediator\Example1
 */
interface Mediator
{
    public function getUser(string $username): string;
}
