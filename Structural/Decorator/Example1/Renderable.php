<?php

namespace Structural\Decorator\Example1;

/**
 * Renderable
 * 这里的装饰方法 renderData() 返回的是字符串格式数据。
 *
 * @package Structural\Decorator\Example1
 */
interface Renderable
{
    public function renderData(): string;
}
