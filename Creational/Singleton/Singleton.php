<?php

namespace Creational\Singleton;

/**
 * Singleton
 *
 * @package Creational\Singleton
 */
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;
    
    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (null === Singleton::$instance) {
            Singleton::$instance = new Singleton();
        }
        
        return self::$instance;
    }
    
    /**
     * 不允许从外部调用, 以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
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
}
