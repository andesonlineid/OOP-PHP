<?php

class FloorCleaner extends CleanerProduct
{

    private $perfume;

    public function __construct($name, $author, $publisher, $price, $perfume)
    {

        // Inherit parent constructor
        parent::__construct($name, $author, $publisher, $price);
        $this->$perfume = $perfume;
    }

    public function setPerfume($perfume)
    {
        $this->perfume = $perfume;
    }

    public function getPerfume()
    {
        return $this->perfume;
    }

    public function getInfo()
    {
        $str = "Product Name : {$this->name} Author: {$this->author} 
        Publisher {$this->publisher} Price: {$this->price}";

        return  $str . "Perfume: " . $this->getPerfume();
    }
}
