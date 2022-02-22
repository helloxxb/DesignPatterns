<?php

namespace Structural\DataMapper;

/**
 * Class User
 *
 * @package Structural\DataMapper
 */
class User
{
    private string $username;
    private string $email;
    
    public static function fromState(array $state): User
    {
        // 在你访问的时候验证状态
        
        return new self(
            $state['username'],
            $state['email']
        );
    }
    
    public function __construct(string $username, string $email)
    {
        // 先验证参数再设置他们
        
        $this->username = $username;
        $this->email = $email;
    }
    
    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
