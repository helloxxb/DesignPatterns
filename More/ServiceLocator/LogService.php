<?php

namespace More\ServiceLocator;

/**
 * LogService
 *
 * @package More\ServiceLocator
 */
class LogService implements Service
{
    private string $uri;
    
    /**
     * LogService constructor.
     * @param mixed ...$args
     */
    public function __construct(...$args)
    {
        foreach ($args as $arg) {
            foreach ($arg as $property => $value) {
                if (property_exists($this, $property)) {
                    $this->{$property} = $value;
                }
            }
        }
    }
    
    public function doSomething(): void
    {
        echo __METHOD__ . ': do something...';
    }
}
