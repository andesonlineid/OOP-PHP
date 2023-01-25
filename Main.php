<?php
require("Weapon.php");


class Player
{
    private  $name;
    private  $health;
    private  $armor;
    private  $totalHealth;
    // How to use object as a data type in class
    private  Weapon $weapon;

    public function __construct($name, $health = 0, $armor = 0)
    {
        $this->name = $name;
        $this->health = $health;
        $this->armor = $armor;
        $this->totalHealth = $this->health + $this->armor;
    }

    // Object type implementation

    public function useWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }
    public function getPlayerName()
    {
        return $this->name;
    }
    public function getPlayerHealth()
    {
        return $this->health;
    }
    public function getPlayerArmor()
    {
        return $this->armor;
    }

    public function getTotalHealth()
    {
        return  $this->totalHealth;
    }





    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function detailPlayer()
    {

        echo
        "====== Player Detail's =======\n" .
            "Player Name: " . $this->getPlayerName() . "\n" .
            "Player Health: " . $this->getPlayerHealth() . "\n" .
            "Player Armor: " . $this->getPlayerArmor() . "\n" .
            "Player Total Health: " . $this->getTotalHealth() . "\n" .
            "Player Weapon: " . $this->weapon->getWeaponName() . "\n";


        // $this->weapon->WeaponInformation();
    }


    public function attacking(Player $player)
    {
        $player->totalHealth -= $this->weapon->getWeaponAttack();
    }
}





// Instance or create a object
// $sword = new Weapon("");

// access and fill property in class
// $sword->name = "Great tech Sword";
// $sword->WeaponName($sword->name);

// Instance object

$sword = new Weapon("Great tech sword", 150);
$sword->setWeaponAttack(50);
$bow = new Weapon("Bow Great", 30);
$Wand = new Weapon("Wand Magic", 90);
$Player1 = new Player("Budi", 100, 20, $sword);
$Player2 = new Player("Razman", 100, 50, $bow);

// Use Weapon
$Player1->useWeapon($sword);
// Change Weapon
$Player1->setWeapon($Wand);
$Player2->useWeapon($bow);

$Player1->detailPlayer();
$Player2->detailPlayer();

// Combine oop with prosedural programming

$start = 1;
$end = 3;
while ($start <= $end) {
    $Player1->attacking($Player2);
    $Player2->attacking($Player1);

    if ($start == $end) {
        if ($Player1->getTotalHealth() < $Player2->getTotalHealth()) {
            echo "Player2 : " . $Player2->getPlayerName() . " Win !!! \n" .
                "Total Health: " . $Player1->getTotalHealth();
        } else {
            echo "Player1 : " . $Player1->getPlayerName() . " Win !!!" . "\n" .
                "Total Health: " . $Player1->getTotalHealth();;
        }
    }

    $start++;
}
