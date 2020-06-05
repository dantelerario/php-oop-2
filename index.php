<?php
include_once __DIR__ . '/classes/Hardware.php';
include_once __DIR__ . '/classes/Books.php';


$hardware1 = new Hardware('Geforce 2080', '00001A', 11, 800, 'GPU', 'Asus');

$hardware2 = new Hardware('Geforce 1080', '00001B', 22, 300, 'GPU', 'Sapphire');

$book1 = new Books('Harry Potter', '002121', 44, 13, 'Harry Potter e la pietra filosofale', 'JK Rowling', 300, 'Fantasy');
$book2 = new Books('Lord of the Rings', '002211', 42, 22, 'Il signore degli Anelli: Le Due Torri', 'Tolkien', 590, 'Fantasy');


var_dump($hardware1);
var_dump($hardware2);

echo "Oggetto numero 1: {$hardware1->printBrandType()} <br>";

echo "Oggetto numero 2: {$hardware2->printBrandType()} <br>";

echo "Prezzo libro numero 1: {$book1->printBookPrice()}€ <br>";

echo "Prezzo libro numero 2: {$book2->printBookPrice()}€ <br>";