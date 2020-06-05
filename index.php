<?php
include_once __DIR__ . '/classes/Hardware.php';
include_once __DIR__ . '/classes/Books.php';


$hardware1 = new Hardware('Geforce 2080', '00001A', 11, 800, 'GPU', 'Asus');

var_dump($hardware1);