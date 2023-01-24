<?php
require("Weapon.php");


class Player
{
    public $name;
    public $health;
    public $armor;
    // How to use object as a data type in class
    public Weapon $weapon;
    public function __construct($name, $health, $armor)
    {
        $this->name = $name;
        $this->health = $health;
        $this->armor = $armor;
    }

    // Object type implementation

    public function useWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }


    public function detailPlayer()
    {

        echo
        "Player Name: " . $this->name . "\n" .
            "Player Health: " . $this->health . "\n" .
            "Player Armor: " . $this->armor . "\n" .
            "Player Weapon: " . $this->weapon->name;

        // $this->weapon->WeaponInformation();
    }
}




// Instance or create a object
// $sword = new Weapon("");

// access and fill property in class
// $sword->name = "Great tech Sword";
// $sword->WeaponName($sword->name);

// Instance object

$sword = new Weapon("Great tech sword", 150);
$bow = new Weapon("Bow Great", 120);
$Player1 = new Player("Budi", 100, 20, $sword);


$Player1->useWeapon($sword);

$Player1->detailPlayer();