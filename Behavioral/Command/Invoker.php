<?php

namespace Behavioral\Command;

/**
 * 调用者使用这种命令。
 * 例 : 一个在 SF2 中的应用
 *
 * @package Behavioral\Command
 */
class Invoker
{
    private Command $command;
    
    /**
     * 在这种调用者中，我们发现，订阅命令也是这种方法
     * 还包括：堆栈、列表、集合等等
     * @param Command $command
     * @return Invoker
     */
    public function setCommand(Command $command): Invoker
    {
        $this->command = $command;
        return $this;
    }
    
    /**
     * 执行这个命令；
     * 调用者也是用这个命令。
     */
    public function run()
    {
        $this->command->execute();
    }
}
