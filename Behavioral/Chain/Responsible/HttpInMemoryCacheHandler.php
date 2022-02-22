<?php

namespace Behavioral\Chain\Responsible;

use Behavioral\Chain\Handler;

/**
 * HTTP 缓存处理类
 *
 * @package Behavioral\Chain\Responsible
 */
class HttpInMemoryCacheHandler extends Handler
{
    private array $data;
    
    /**
     * HttpInMemoryCacheHandler constructor.
     * @param array $data 数据数组参数
     * @param Handler|null $successor 处理器对象
     */
    public function __construct(array $data, ?Handler $successor)
    {
        parent::__construct($successor);
        $this->data = $data;
    }
    
    /**
     * 返回缓存中对应路径存储的数据
     * @inheritDoc
     */
    protected function processing(): ?string
    {
        $key = '/foo/bar?index=1';
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }
}
