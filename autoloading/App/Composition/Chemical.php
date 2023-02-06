<?php

namespace App\Composition;

class Chemical
{

    public $name;
    function __construct($name = "Co2")
    {
        $this->name = $name;
    }

    function chemicalMaterials()
    {
        return "\n this is chemical materials from composition dir " . $this->name;
    }
}
