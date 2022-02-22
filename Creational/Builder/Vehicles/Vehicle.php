<?php

namespace Creational\Builder\Vehicles;

use Creational\Builder\Parts\Part;

/**
 * Vehicle
 *
 * @package Creational\Builder\Vehicles
 */
abstract class Vehicle
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var Part[]
     */
    private array $data = [];
    
    /**
     * @param string $name
     * @return Vehicle
     */
    public function setName(string $name): Vehicle
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * @param string $key
     * @param Part $object
     */
    public function setPart(string $key, Part $object)
    {
        $this->data[$key] = $object;
    }
    
    /**
     * 配置说明
     * @return array
     */
    public function getDesc(): array
    {
        $parts = [];
        foreach ($this->data as $partKey => $part) {
            $parts[$partKey] = $part->getDesc();
        }
        return [
            'cart_name' => $this->name,
            'parts' => $parts,
        ];
    }
}
