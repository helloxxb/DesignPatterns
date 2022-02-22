<?php

namespace Behavioral\Chain\Responsible;

use Behavioral\Chain\Handler;

/**
 * 数据库处理器
 *
 * @package Behavioral\Chain\Responsible
 */
class SlowDatabaseHandler extends Handler
{
    /**
     * 定义处理方法，下面应该是个数据库查询动作，
     * 但是简单化模拟，直接返回一个 'Hello World' 字符串作查询结果。
     * @inheritDoc
     */
    protected function processing(): string
    {
        return 'Hello World';
    }
}
