<?php

namespace Behavioral\TemplateMethod;

/**
 * BeachJourney
 *
 * @package Behavioral\TemplateMethod
 */
class BeachJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return 'Swimming and sun-bathing';
    }
    
}
