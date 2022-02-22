<?php

namespace Creational\Builder;

use Creational\Builder\Parts\Door;
use Creational\Builder\Parts\Engine;
use Creational\Builder\Parts\Wheel;
use Creational\Builder\Vehicles\Truck;
use Creational\Builder\Vehicles\Vehicle;

/**
 * TruckBuilder
 *
 * @package Creational\Builder
 */
class TruckBuilder implements Builder
{
    private Vehicle $vehicle;
    
    public function createVehicle()
    {
        $this->vehicle = (new Truck())->setName('沃尔沃卡车');
    }
    
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
    
    public function addWheel()
    {
        $wheel = (new Wheel())->setBrand('米其林')->setTire('255/35 R19');
        $this->vehicle->setPart('wheel_1', $wheel);
        $this->vehicle->setPart('wheel_2', $wheel);
        $this->vehicle->setPart('wheel_3', $wheel);
        $this->vehicle->setPart('wheel_4', $wheel);
        $this->vehicle->setPart('wheel_5', $wheel);
        $this->vehicle->setPart('wheel_6', $wheel);
    }
    
    public function addEngine()
    {
        $engine = (new Engine())->setBrand('沃尔沃')->setType('涡轮增压');
        $this->vehicle->setPart('engine', $engine);
    }
    
    public function addDoors()
    {
        $door = (new Door())->setBrand('沃尔沃')->setColor('白色');
        $this->vehicle->setPart('right_door', $door);
        $this->vehicle->setPart('left_door', $door);
        $this->vehicle->setPart('trunk_lid', $door);
    }
}
