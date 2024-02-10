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

        // Call the show_all() method to display information about the house
        $this->show_all();
    }

    public function show_all() {
        echo "Location: {$this->location}\n";
        echo "Price: {$this->price}\n";
        echo "Lot: {$this->lot}\n";
        echo "Type: {$this->type}\n";
        echo "Discount: {$this->discount}\n";
        echo "Total Price: {$this->calculateTotalPrice()}\n\n";
    }

    public function calculateTotalPrice() {
        return $this->price - ($this->price * $this->discount);
    }
}

// Creating instances of the House class
$house1 = new House('La Union', 1500000, '100sqm', 'Pre-selling');
$house2 = new House('Metro Manila', 1000000, '150sqm', 'Ready for Occupancy');
$house3 = new House('Cebu', 1200000, '120sqm', 'Pre-selling');
$house4 = new House('Davao', 800000, '80sqm', 'Ready for Occupancy');
$house5 = new House('Baguio', 2000000, '200sqm', 'Pre-selling');

?>
