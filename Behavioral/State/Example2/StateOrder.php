<?php

namespace Behavioral\State\Example2;

/**
 * StateOrder
 *
 * @package Behavioral\State\Example2
 */
abstract class StateOrder
{
    private array $details;
    protected static StateOrder $state;
    
    protected function setStatus(string $status): void
    {
        $this->details['status'] = $status;
        $this->details['time']   = date('Y-m-d H:i:s');
    }
    
    protected function getStatus(): string
    {
        return json_encode($this->details, JSON_PRETTY_PRINT);
    }
    
    abstract public function done();
}
