<?php

abstract class CleanerProduct
{
    protected $name, $author, $publisher, $price;

    public function __construct($name = "none", $author, $publisher, $price)
    {
        $this->$name = $name;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public abstract function getInfo();
}
