<?php

namespace More\Repository;

/**
 * Persistence
 *
 * @package More\Repository
 */
interface Persistence
{
    public function generateId(): int;
    
    public function persist(array $data);
    
    public function retrieve(int $id): array;
    
    public function delete(int $id);
}
