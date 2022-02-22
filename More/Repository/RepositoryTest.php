<?php

use More\Repository\Domain\PostId;
use More\Repository\Domain\PostStatus;
use More\Repository\InMemoryPersistence;
use More\Repository\Domain\Post;
use More\Repository\PostRepository;

require '../../vendor/autoload.php';

$repository = new PostRepository(new InMemoryPersistence());
var_dump($repository->generateId()->toInt());

// var_dump($repository->findById(PostId::fromInt(42)));
// Uncaught OutOfBoundsException: No data found for ID 42

$postId = $repository->generateId();
$post = Post::draft($postId, 'Repository Pattern', 'Design Patterns PHP');
$repository->save($post);

var_dump(
    $repository->findById($postId),
    '--------',
    $repository->findById($postId)->getId(),
    $post->getStatus()->toString()
);
