<?php

namespace Structural\FluentInterface;

/**
 * QueryBuilder
 *
 * @package Structural\FluentInterface
 */
class QueryBuilder
{
    private array $fields = [];
    private array $from = [];
    private array $where = [];
    
    public function select(array $fields): QueryBuilder
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    public function from(string $table, string $alias): QueryBuilder
    {
        $this->from[] = $table . ' AS ' . $alias;
        
        return $this;
    }
    
    public function where(string $condition): QueryBuilder
    {
        $this->where[] = $condition;
        
        return $this;
    }
    
    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}
