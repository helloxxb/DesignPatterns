<?php

namespace Structural\Registry;

use DateTime;

/**
 * Service
 *
 * @package Structural\Registry
 */
abstract class Service
{
    private string $serviceName;
    private DateTime $dateTime;
    
    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->serviceName = static::class;
        $this->dateTime = new DateTime();
    }
}
