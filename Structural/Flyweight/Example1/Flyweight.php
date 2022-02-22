<?php

namespace Structural\Flyweight\Example1;

/**
 * Flyweight
 *
 * @package Structural\Flyweight\Example1
 */
interface Flyweight
{
    /**
     * 创建传递函数。
     * 返回字符串格式数据。
     *
     * @param string $input
     * @return string
     */
    public function render(string $input): string;
}
