<?php

namespace Structural\Flyweight\Example1;

use Countable;

/**
 * FlyweightFactory
 * 工厂类会管理分享享元类，客户端不应该直接将他们实例化。
 * 但可以让工厂类负责返回现有的对象或创建新的对象。
 *
 * @package Structural\Flyweight\Example1
 */
class FlyweightFactory implements Countable
{
    /**
     * 定义享元特征数组。
     * 用于存储不同的享元特征。
     * @var CharacterFlyweight[]
     */
    private array $pool = [];
    
    /**
     * 输入字符串格式数据 $name
     * 返回 CharacterFlyweight 对象。
     *
     * @param string $name
     * @return CharacterFlyweight
     */
    public function get(string $name): CharacterFlyweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }
        
        return $this->pool[$name];
    }
    
    /**
     * 返回享元特征个数。
     */
    public function count(): int
    {
        return count($this->pool);
    }
}
