<?php 
    class item{
        private $name;
        private $price;
        private $stock;
        private $sold;

        public function __construct($name, $price, $stock){
            $this->name = $name;
            $this->price = $price;
            $this->stock = $stock;
            $this->sold = 0;
        }

        public function logDetails(){
            echo "ITEM: {$this->name}, PRICE: {$this->price}, STOCK: {$this->stock}, SOLD: {$this->sold}" . "<br>";
        }


        public function buy(){
            if($this->stock > 0){
                echo"Buying" . "<br>";
                $this->sold += 1;
                $this->stock -= 1;
            } else{
                echo "Out of stock" . "<br>";
            }
        }

        public function returnItem(){
            if($this->sold > 0){
                echo"Returning" . "<br>";
                $this->sold -= 1;
                $this->stock += 1;
            } else{
                echo "no items to return" . "<br>";
            }
        }
    }

    $product1 = new item("Item 1", 10,5);
    $product2 = new item("Item 2", 15,8);
    $product3 = new item("Item 3", 20,3);

    echo "first instance" . "<br>";

    for ($i = 0; $i < 3; $i++) {
        $product1->buy();
    }

    $product1->returnItem();
    $product1->logDetails();

    echo "<br><br>" . "second instance" . "<br>";
    for ($i = 0; $i < 2; $i++) {
        $product2->buy();
    }

    for ($i = 0; $i < 2; $i++) {
        $product2->returnItem();
    }

    $product2->logDetails();

    echo "<br><br>" . "Third instance" . "<br>";
    for ($i = 0; $i < 3; $i++) {
        $product3->returnItem();
    }

    $product3->logDetails();

?>