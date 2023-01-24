<?php

class Player
{
    public $name;
    public $health;
    public $armor;
    public Weapon $weapon;
    public function __construct($name, $health, $armor, $weapon)
    {
        $this->name = $name;
        $this->health = $health;
        $this->armor = $armor;
        $this->weapon = $weapon;
    }

    public function detailPlayer()
    {
        echo "
        Name: $this->name \n
        Health: $this->health\n
        Armor: $this->armor\n
        Weapon: $this->weapon
        ";
    }
}