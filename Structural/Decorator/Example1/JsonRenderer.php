<?php

namespace Structural\Decorator\Example1;

/**
 * JsonRenderer
 *
 * @package Structural\Decorator\Example1
 */
class JsonRenderer extends RendererDecorator
{
    /**
     * 对传入的渲染接口对象进行处理，生成 JSON 数据。
     */
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}
