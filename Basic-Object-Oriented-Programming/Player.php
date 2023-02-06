<?php

class Player
{
    private $name;
    private $health;
    private $armor;
    private $totalHealth;
    // How to use object as a data type in class
    private Weapon $weapon;

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
        return $this->totalHealth;
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
