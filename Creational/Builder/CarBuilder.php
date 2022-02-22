<?php

namespace Creational\Builder;

use Creational\Builder\Parts\Door;
use Creational\Builder\Parts\Engine;
use Creational\Builder\Parts\Wheel;
use Creational\Builder\Vehicles\Car;
use Creational\Builder\Vehicles\Vehicle;

/**
 * CarBuilder
 *
 * @package Creational\Builder
 */
class CarBuilder implements Builder
{
    private Vehicle $vehicle;
    
    public function createVehicle()
    {
        $this->vehicle = (new Car())->setName('本田雅阁');
    }
    
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
    
    public function addWheel()
    {
        $wheel = (new Wheel())->setBrand('米其林')->setTire('255/35 R19');
        $this->vehicle->setPart('wheel_lf', $wheel);
        $this->vehicle->setPart('wheel_rf', $wheel);
        $this->vehicle->setPart('wheel_lr', $wheel);
        $this->vehicle->setPart('wheel_rr', $wheel);
    }
    
    public function addEngine()
    {
        $engine = (new Engine())->setBrand('本田')->setType('涡轮增压');
        $this->vehicle->setPart('engine', $engine);
    }
    
    public function addDoors()
    {
        $door = (new Door())->setBrand('本田')->setColor('白色');
        $this->vehicle->setPart('right_door', $door);
        $this->vehicle->setPart('left_door', $door);
        $this->vehicle->setPart('trunk_lid', $door);
    }
}
