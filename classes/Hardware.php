<?php
include_once __DIR__ . '/Storage.php';

class Hardware extends Storage {
    public $hardware_type;
    public $hardware_brand;

    public function __construct($_item_name, $_item_code, $_item_quantity, $_item_price, $_hardware_type, $_hardware_brand) {
        parent::__construct($_item_name, $_item_code, $_item_quantity, $_item_price);
        $this->hardware_type = $_hardware_type;
        $this->hardware_brand = $_hardware_brand;
    }

    public function printBrandType() {
        return $this->item_name . ' ' . $this->hardware_type . ' ' . $this->hardware_brand;
    }
}