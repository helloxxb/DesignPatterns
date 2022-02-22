<?php

namespace Behavioral\Visitor;

/**
 * Role
 *
 * @package Behavioral\Visitor
 */
interface Role
{
    public function accept(RoleVisitor $visitor);
}
