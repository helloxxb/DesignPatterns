<?php

use Structural\Adapter\PaperBook;
use Structural\Adapter\EBookAdapter;
use Structural\Adapter\Kindle;

require '../../vendor/autoload.php';

$paper = new PaperBook();
$paper->open();
$paper->turnPage();
var_dump($paper, $paper->getPage());

$ebook = new EBookAdapter(new Kindle());
$ebook->open();
$ebook->turnPage();
var_dump($ebook, $ebook->getPage());
