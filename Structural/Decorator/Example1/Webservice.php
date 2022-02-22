<?php

namespace Structural\Decorator\Example1;

/**
 * Webservice
 * 该类将在后面为装饰者实现数据的输入。
 *
 * @package Structural\Decorator\Example1
 */
class Webservice implements Renderable
{
    private string $data;
    
    /**
     * 传入字符串格式数据。
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
    }
    
    /**
     * 实现 Renderable 渲染接口中的 renderData() 方法。
     * 返回传入的数据。
     */
    public function renderData(): string
    {
        return $this->data;
    }
}
