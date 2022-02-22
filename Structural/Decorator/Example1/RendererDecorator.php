<?php

namespace Structural\Decorator\Example1;

/**
 * RendererDecorator
 * 装饰者必须实现渲染接口类 Renderable 契约，这是该设计模式的关键点。
 * 否则，这将不是一个装饰者而只是一个自欺欺人的包装。
 *
 * @package Structural\Decorator\Example1
 */
abstract class RendererDecorator implements Renderable
{
    /**
     * @var Renderable
     * 定义渲染接口变量。
     */
    protected Renderable $wrapped;
    
    /**
     * @param Renderable $renderer
     */
    public function __construct(Renderable $renderer)
    {
        $this->wrapped = $renderer;
    }
}
