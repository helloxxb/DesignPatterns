<?php

namespace Behavioral\Visitor;

/**
 * Note: the visitor must not choose itself which method to
 * invoke, it is the visited object that makes this decision
 *
 * @package Behavioral\Visitor
 */
interface RoleVisitor
{
    public function visitUser(User $role);
    
    public function visitGroup(Group $role);
}
