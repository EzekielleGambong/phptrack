<?php

class House {
    public $location;
    public $price;
    public $lot;
    public $type;
    public $discount;

    public function __construct($location, $price, $lot, $type) {
        $this->location = $location;
        $this->price = $price;
        $this->lot = $lot;
        $this->type = $type;
        $this->discount = ($type === 'Pre-selling') ? 0.2 : 0.05;

       
        $this->show_all();
    }

    public function show_all() {
        echo "Location: {$this->location}" . "<br>";
        echo "Price: {$this->price}" . "<br>";
        echo "Lot: {$this->lot}" . "<br>";
        echo "Type: {$this->type}" . "<br>";
        echo "Discount: {$this->discount}" . "<br>";
        echo "Total Price: {$this->calculateTotalPrice()}" . "<br><br>";
    }

    public function calculateTotalPrice() {
        return $this->price - ($this->price * $this->discount);
    }
}


$house1 = new House('La Union', 1500000, '100sqm', 'Pre-selling');
$house2 = new House('Metro Manila', 1000000, '150sqm', 'Ready for Occupancy');
$house3 = new House('Cebu', 1200000, '120sqm', 'Pre-selling');
$house4 = new House('Davao', 800000, '80sqm', 'Ready for Occupancy');
$house5 = new House('Baguio', 2000000, '200sqm', 'Pre-selling');

?>
