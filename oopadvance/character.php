<?php

class Character {
    protected $name;
    protected $health;
    protected $stamina;
    protected $manna;

    public function __construct($name) {
        $this->name = $name;
        $this->health = 100;
        $this->stamina = 100;
        $this->manna = 100;
    }

    public function walk() {
        $this->stamina -= 1;
    }

    public function run() {
        $this->stamina -= 3;
    }

    public function showStats() {
        echo "Name: {$this->name}". "<br>";
        echo "Health: {$this->health}". "<br>";
        echo "Stamina: {$this->stamina}". "<br>";
        echo "Manna: {$this->manna}". "<br>";
        echo "\n";
    }
}

class Shaman extends Character {
    public function __construct($name) {
        parent::__construct($name);
        $this->health = 150;
    }

    public function heal() {
        $this->health += 5;
        $this->stamina += 5;
        $this->manna += 5;
    }
}

class Swordsman extends Character {
    public function __construct($name) {
        parent::__construct($name);
        $this->health = 170;
    }

    public function slash() {
        $this->manna -= 10;
    }

    public function showStats() {
        echo "I am powerful!\n";
        parent::showStats();
    }
}


$character = new Character('character');
$character->walk();
$character->walk();
$character->walk();
$character->run();
$character->run();
$character->showStats();



// Create an instance of Shaman
$shaman = new Shaman('shaman');
$shaman->walk();
$shaman->walk();
$shaman->walk();
$shaman->run();
$shaman->run();
$shaman->heal();
$shaman->showStats();

$swordsman = new Swordsman('swordsman');
$swordsman->walk();
$swordsman->walk();
$swordsman->walk();
$swordsman->run();
$swordsman->run();
$swordsman->slash();
$swordsman->slash();
$swordsman->showStats();

?>
