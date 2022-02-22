<?php

namespace Behavioral\Visitor;

/**
 * User
 *
 * @package Behavioral\Visitor
 */
class User implements Role
{
    private string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function getName(): string
    {
        return sprintf('User %s', $this->name);
    }
    
    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitUser($this);
    }
}
