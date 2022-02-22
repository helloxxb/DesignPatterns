<?php

namespace Behavioral\Mediator\Example2\Subsystem;

use Behavioral\Mediator\Example2\Colleague;

/**
 * Server
 *
 * @package Behavioral\Mediator\Example2\Subsystem
 */
class Server extends Colleague
{
    public function process(): void
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf('Hello: %s', $data));
    }
}
