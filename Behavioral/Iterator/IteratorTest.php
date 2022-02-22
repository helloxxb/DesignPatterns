<?php

use Behavioral\Iterator\Book;
use Behavioral\Iterator\BookList;

require '../../vendor/autoload.php';

$bookList = new BookList();
$bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
$bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
$bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));
$bookList->removeBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));

$books = [];
foreach ($bookList as $book) {
    $books[] = $book->getAuthorAndTitle();
}
var_dump($books);
