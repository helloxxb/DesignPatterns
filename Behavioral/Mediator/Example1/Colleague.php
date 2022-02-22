<?php

namespace Behavioral\Mediator\Example1;

/**
 * Colleague
 *
 * @package Behavioral\Mediator\Example1
 */
abstract class Colleague
{
    protected Mediator $mediator;
    
    /**
     * @param Mediator $mediator
     */
    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}
