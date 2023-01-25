<?php

// Class & object
// Class: blueprint / design / template to create a object
// Object: real form from class 

class Weapon
{

    // Data or Property
    private $name;
    private $weaponAttack;

    // Behaviour or Method

    // constructor 
    // function that first run when object created
    // we can put default value such as we're using function as usual
    public function __construct($name, $attack)
    {
        $this->name = $name;
        $this->weaponAttack = $attack;
    }

    // Function with return without parameter

    // Read only
    public function getWeaponName()
    {
        //  $this->name
        return $this->name;
    }
    public function getWeaponAttack()
    {
        return $this->weaponAttack;
    }
    // Write only
    public function setWeaponAttack($attack)
    {
        $this->weaponAttack = $attack;
    }
    public function setWeaponName($weaponName)
    {
        $this->name = $weaponName;
    }
}
