<?php

// Class & object
// Class: blueprint / design / template to create a object
// Object: real form from class 

class Weapon
{

    // Data or Property
    public $name;
    public $attack;

    // Behaviour or Method

    // constructor 
    // function that first run when object created
    // we can put default value such as we're using function as usual
    public function __construct($name, $attack)
    {
        $this->name = $name;
        $this->attack = $attack;
    }

    public function WeaponInformation()
    {
        //  $this->name
        echo "Weapon name: $this->name Weapon attack: $this->attack";
    }
}