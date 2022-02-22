<?php

namespace More\Delegation;

/**
 * JuniorDeveloper
 *
 * @package More\Delegation
 */
class JuniorDeveloper
{
    public function writeCode(): string
    {
        return __METHOD__ .': Some junior developer generated code...';
    }
}
