<?php

namespace Structural\Composite;

/**
 * Form
 * 该组合内的节点必须派生于该组件契约。为了构建成一个组件树，此为强制性操作。
 *
 * @package Structural\Composite
 */
class Form implements Renderable
{
    /**
     * @var Renderable[]
     */
    private array $elements;
    
    /**
     * 遍历所有元素，并对他们调用 render() 方法，然后返回表单的完整解析表达。
     *
     * 从外部上看，我们不会看到遍历过程，该表单的操作过程与单一对象实例一样
     *
     * @return string
     */
    public function render(): string
    {
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '</form>';
    
        return $formCode;
    }
    
    public function addElement(Renderable $element): Form
    {
        $this->elements[] = $element;
        return $this;
    }
}
