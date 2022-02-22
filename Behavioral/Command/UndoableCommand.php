<?php

namespace Behavioral\Command;

/**
 * UndoableCommand
 *
 * @package Behavioral\Command
 */
interface UndoableCommand extends Command
{
    /**
     * 此方法用于撤消命令执行所做的更改
     */
    public function undo();
}
