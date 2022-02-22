<?php

namespace Behavioral\Mediator\Example2;

/**
 * Mediator 接口为 RequestMediator 类建立契约
 * 该接口虽非强制，但优于 Liskov 替换原则。
 *
 * @package Behavioral\Mediator\Example2
 */
interface Mediator
{
    /**
     * 做出请求
     */
    public function makeRequest(): void;
    
    /**
     * 查询数据库
     */
    public function queryDb(): string;
    
    /**
     * 发出响应
     *
     * @param string $content
     */
    public function sendResponse(string $content): void;
}
