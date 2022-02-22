<?php

namespace More\Delegation;

/**
 * TeamLead
 *
 * @package More\Delegation
 */
class TeamLead
{
    /**
     * @var JuniorDeveloper
     */
    private JuniorDeveloper $junior;
    
    /**
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->junior = $junior;
    }
    
    public function writeCode(): string
    {
        return $this->junior->writeCode();
    }
}
