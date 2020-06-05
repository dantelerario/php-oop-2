<?php
include_once __DIR__ . '/Storage.php';

class Books extends Storage {
    public $title;
    public $author;
    public $pages;
    public $genre;

    public function __construct($_item_name, $_item_code, $_item_quantity, $_item_price, $_title, $_author, $_pages, $_genre) {
        parent::__construct($_item_name, $_item_code, $_item_quantity, $_item_price);
        $this->title = $_title;
        $this->author = $_author;
        $this->pages = $_pages;
        $this->genre = $_genre;
    }

    public function printBookPrice() {
        return $this->item_name . ' ' . $this->title . ' ' . $this->item_price;
    }
}