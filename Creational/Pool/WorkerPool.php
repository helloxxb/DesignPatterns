<?php

namespace Creational\Pool;

use Countable;

/**
 * WorkerPool
 *
 * @package Creational\Pool
 */
class WorkerPool implements Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private array $occupiedWorkers = [];
    
    /**
     * @var StringReverseWorker[]
     */
    private array $freeWorkers = [];
    
    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
    
    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) === 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        $key = spl_object_hash($worker);
        $this->occupiedWorkers[$key] = $worker;
        
        return $worker;
    }
    
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }
}
