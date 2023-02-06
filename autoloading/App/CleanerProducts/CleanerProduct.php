<?php

namespace App\CleanerProducts;

abstract class CleanerProduct
{
    protected $name, $author, $publisher, $price;

    public function __construct($name, $author, $publisher, $price)
    {
        $this->name = $name;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public abstract function getInfo();
}
