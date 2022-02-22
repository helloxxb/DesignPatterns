<?php

namespace Behavioral\Mediator\Example1;

/**
 * UserRepository
 *
 * @package Behavioral\Mediator\Example1
 */
class UserRepository extends Colleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}
