<?php

namespace Behavioral\Visitor;

/**
 * RecordingVisitor
 *
 * @package Behavioral\Visitor
 */
class RecordingVisitor implements RoleVisitor
{
    /**
     * @var Role[]
     */
    private array $visited = [];
    
    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
    
    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }
    
    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }
}
