<?php

namespace Creational\Builder;

use Creational\Builder\Vehicles\Vehicle;

/**
 * BuilderInterface
 *
 * @package Creational\Builder
 */
interface Builder
{
    public function createVehicle();
    
    public function getVehicle(): Vehicle;
    
    public function addWheel();
    
    public function addEngine();
    
    public function addDoors();
}
