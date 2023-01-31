<?php
// Depends on design 
abstract class Product
{

    private $name, $author, $publisher, $price;

    public function __construct($name, $author, $publisher, $price)
    {
        $this->name = $name;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    // Abstract method just interface for child class
    public abstract function  getInfoProduct();

    public function getInfo()
    {

        return "$this->name Author:  $this->author Publisher $this->publisher Price: $this->price";
    }
}

class Comic extends Product
{
    private $pages;

    public function __construct($name, $author, $publisher, $price, $pages)
    {
        parent::__construct($name, $author, $publisher, $price);
        $this->$pages = $pages;
    }

    public function getInfoProduct()
    {
        return
            "Komik: " . $this->getInfo() . "Pages: " . $this->pages;
    }
}

class Game extends Product
{
    private $hours;
    public function __construct($name, $author, $publisher, $price, $hours)
    {

        parent::__construct($name, $author, $publisher, $price);
        $this->hours = $hours;
    }

    public function getInfoProduct()
    {
        return "Game : " . parent::getInfo() . " Hours: " . $this->hours;
    }
}

class PrintAllProducts
{
    private $products = array();
    public function __construct()
    {
    }

    public function setProducts(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
    public function printProducts()
    {
        $str = "Detail Products: \n";

        foreach ($this->getProducts() as $product) {
            $str .=  $product->getInfoProduct() . "\n";
        }
        return $str;
    }
}

// Instance object
$product1 = new Comic("Naruto", "Masashi Kishimoto", "PT. Gramedia Mediatama", 50000, 128);
$product2 = new Game("Valhalla", "Kimochi Arigato", "PT. Trinusa", 30000, 50);
$cetak = new PrintAllProducts();
$cetak->setProducts($product1);
$cetak->setProducts($product2);
echo $cetak->printProducts();