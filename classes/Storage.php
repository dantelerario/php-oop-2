<?php
/**
 * MAGAZZINO
 */
class Storage {
    public $item_name;
    public $item_code;
    public $item_quantity;
    public $item_price;

    public function __construct($_item_name, $_item_code, $_item_quantity, $_item_price) {
        $this->item_name = $_item_name;
        $this->item_code = $_item_code;
        $this->item_quantity = $_item_quantity;
        $this->eta = $_item_price;
    }
    public function printItemName() {
        return $this->item_name . ' ' . $this->item_code;
    }
}