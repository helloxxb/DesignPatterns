<?php

namespace Behavioral\Mediator\Example2;

/**
 * Colleague 是个抽象类，该类对象虽彼此协同却不知彼此，只知中介者 RequestMediator 类
 *
 * @package Behavioral\Mediator\Example2
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
