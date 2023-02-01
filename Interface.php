<?php

// Interface also abstract class
interface WeaponInformation
{
    // Cannot have property, only method interface  and method visibility must be public
    public function getWeaponInformation();
}

abstract class Weapon
{
    protected  $name, $attack, $price;
    // public  $weapons = array();

    public function __construct($name, $attack = 0, $price = 0)
    {
        $this->name = $name;
        $this->attack = $attack;

        $this->price = $price;
    }

    // Abstract method
    abstract public function getBaseWeaponInfo();

    // public function setWeapons(Weapon $weapon)
    // {
    //     $this->weapons[] = $weapon;
    // }

    // this function should be put inside parent class because it's stored all object weapons
    // public function getWeapons()
    // {
    //     foreach ($this->weapons as $weapon) {
    //         return  $weapon->getWeaponInformation();
    //     }
    // }
}

// Child class
class Dagger  extends Weapon implements WeaponInformation
{
    private $magicAttack;
    public function __construct($name, $attack, $price, $magicAttack)
    {
        $this->magicAttack = $magicAttack;
        parent::__construct($name, $attack, $price);
    }

    // Implement abstract method
    public function getBaseWeaponInfo()
    {
        $str = "Name: " . $this->name . " Attack: {$this->attack}  Price: {$this->price}";
        return $str;
    }
    // Implements interface method
    public function getWeaponInformation()
    {
        return $this->getBaseWeaponInfo() . " M.atk: {$this->magicAttack}";
    }
}

class Shield extends Weapon implements WeaponInformation
{
    private $defence;
    public function __construct($name, $attack, $price, $defence)
    {
        $this->defence = $defence;
        parent::__construct($name, $attack, $price);
    }

    // Implement abstract method
    public function getBaseWeaponInfo()
    {
        $str = "Name: " . $this->name . " Attack: {$this->attack}  Price: {$this->price}";
        return $str;
    }
    // Implement interface method
    public function  getWeaponInformation()
    {
        return $this->getBaseWeaponInfo() . " Defence: {$this->defence}";
    }
}

$dagger = new Dagger("Scylia Dagger", 300, 20000, 225);
$shield = new Shield("Shield Knight", 0, 2000, 1000);