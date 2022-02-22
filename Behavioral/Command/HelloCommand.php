<?php

namespace Behavioral\Command;

/**
 * HelloCommand
 *
 * @package Behavioral\Command
 */
class HelloCommand implements Command
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
        // 有时候，这里没有接收者，并且这个命令执行所有工作。
        $this->output->write('Hello World');
    }
}
