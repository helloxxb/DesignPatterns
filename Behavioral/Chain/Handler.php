<?php

namespace Behavioral\Chain;

/**
 * 处理器抽象类
 *
 * @package Behavioral\Chain
 */
abstract class Handler
{
    /**
     * @var Handler|null 定义继承处理器
     */
    private ?Handler $successor = null;
    
    /**
     * 输入集成处理器对象
     * @param Handler|null $successor
     */
    public function __construct(Handler $successor = null)
    {
        $this->successor = $successor;
    }
    
    /**
     * 通过使用模板方法模式这种方法可以确保每个子类不会忽略调用继承
     * @return string|null
     */
    final public function handle(): ?string
    {
        $processed = $this->processing();
        if ($processed === null) {
            // 请求尚未被目前的处理器处理 => 传递到下一个处理器。
            if ($this->successor !== null) {
                $processed = $this->successor->handle();
            }
        }
        return $processed;
    }
    
    /**
     * 声明处理方法
     * @return mixed
     */
    abstract protected function processing();
}
