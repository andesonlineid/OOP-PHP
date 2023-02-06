<?php

namespace App\CleanerProducts;

class Chemical
{
    public $name;
    public function __construct($name = "c02")
    {
        $this->name = $name;
    }
    public function chemicalMaterials()
    {
        return "ABCDEFG";
    }
}
