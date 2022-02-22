<?php

namespace Structural\Flyweight\Example1;

/**
 * CharacterFlyweight
 * 假如可以的话，实现享元接口并增加内存存储内部状态。
 * 具体的享元实例被工厂类的方法共享。
 *
 * @package Structural\Flyweight\Example1
 */
class CharacterFlyweight implements Flyweight
{
    /**
     * 任何具体的享元对象存储的状态必须独立于其运行环境。
     * 享元对象呈现的特点，往往就是对应的编码的特点。
     *
     * @var string
     */
    private string $name;
    
    /**
     * CharacterFlyweight constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    /**
     * @param string $input
     * @return string
     */
    public function render(string $input): string
    {
        // 享元对象需要客户端提供环境依赖信息来自我定制。
        // 外在状态经常包含享元对象呈现的特点，例如字符。
    
        return sprintf('Character %s with font %s', $this->name, $input);
    }
}
