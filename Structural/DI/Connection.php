<?php

namespace Structural\DI;

/**
 * Connection
 *
 * @package Structural\DI
 */
class Connection
{
    private Configuration $configuration;
    
    public function __construct(Configuration $config)
    {
        $this->configuration = $config;
    }
    
    public function getDsn(): string
    {
        // 这仅仅是演示，而不是一个真正的 DSN
        // 注意，这里只使用了注入的配置。
        // 所以，这里是关键的分离关注点。
        
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
