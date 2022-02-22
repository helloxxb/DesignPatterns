<?php

namespace Structural\Decorator\Example1;

use DOMDocument;

/**
 * XmlRenderer
 *
 * @package Structural\Decorator\Example1
 */
class XmlRenderer extends RendererDecorator
{
    /**
     * 对传入的渲染接口对象进行处理，生成 DOM 数据文件。
     */
    public function renderData(): string
    {
        $doc = new DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));
        
        return $doc->saveXML();
    }
}
