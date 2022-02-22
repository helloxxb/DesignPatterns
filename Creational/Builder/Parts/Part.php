<?php

namespace Creational\Builder\Parts;

use ReflectionClass;

/**
 * Part
 *
 * @package Creational\Builder\Parts
 */
abstract class Part
{
    private string $brand;
    
    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
    
    /**
     * @param string $brand
     * @return Part
     */
    public function setBrand(string $brand): Part
    {
        $this->brand = $brand;
        return $this;
    }
    
    /**
     * 零部件说明
     * @return array
     */
    public function getDesc(): array
    {
        $attributes = [];
        $reflection = new ReflectionClass(static::class);
        $properties = $reflection->getProperties();
        foreach ($properties as $property) {
            if ($property->isStatic()) {
                continue;
            }
            $name = $property->getName();
            if (method_exists($this, ($method = 'get' . $name))) {
                $value = $this->{$method}();
                $attributes[] = [$name => $value];
            }
        }
        return $attributes;
    }
}
