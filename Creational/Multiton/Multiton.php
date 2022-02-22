<?php

namespace Creational\Multiton;

/**
 * Multiton
 *
 * @package Creational\Multiton
 */
final class Multiton
{
    const INSTANCE_MYSQL = 'mysql';
    const INSTANCE_SQLITE = 'sqlite';
    
    private static array $instances = [];
    private string $connection;
    
    /**
     * 这里私有方法阻止用户随意的创建该对象实例
     */
    private function __construct()
    {
    }
    
    /**
     * 防止实例被克隆
     */
    private function __clone()
    {
    }
    
    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
    }
    
    public function doSomething()
    {
        var_dump(self::$instances);
    }
    
    /**
     * @param string $name
     * @return Multiton
     */
    public static function getInstance(string $name): Multiton
    {
        if (!isset(self::$instances[$name])) {
            $multiton = new self();
            $multiton->connection = $name;
            self::$instances[$name] = $multiton;
        }
        return self::$instances[$name];
    }
}
