<?php

namespace Behavioral\Command;

/**
 * 此具体命令调整接收方以将当前日期添加到消息调用方，只是知道它可以调用“执行”
 *
 * @package Behavioral\Command
 */
class AddMessageDateCommand implements UndoableCommand
{
    private Receiver $output;
    
    /**
     * 每个具体的命令都来自不同的接收者。
     * 这个可以是一个或者多个接收者，但是参数里必须是可以被执行的命令。
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }
    
    /**
     * @inheritDoc
     */
    public function execute()
    {
        // sometimes, there is no receiver and this is the command which
        // does all the work
        $this->output->enableDate();
    }
    
    /**
     * @inheritDoc
     */
    public function undo()
    {
        // sometimes, there is no receiver and this is the command which
        // does all the work
        $this->output->disableDate();
    }
}
