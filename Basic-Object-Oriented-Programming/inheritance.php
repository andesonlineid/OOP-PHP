<?php
// Inheritance concept

class Products
{
    // Property
    private  $title;
    private $author;
    private $publisher;
    private $price;
    protected $discount;

    // Constructor
    public function __construct($title = "null", $author = "null", $publisher = "null", $price = 0, $discount = 0)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->discount = $discount;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getLabel()
    {
        return  "$this->author, $this->publisher";
    }

    public function getPriceWithDiscount()
    {
        return $this->getPrice() - (($this->getPrice() * $this->discount)  / 100);
    }


    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    // Child class Extend parent functionality
    public function getDetailsInformation()
    {
        return "  {$this->getTitle()} | {$this->getAuthor()} | {$this->getPublisher()} | {$this->getPrice()} ";
    }
}

// Child class 
class Comic extends Products
{
    public  $page;

    // When we're using child class to access method or property on parent
    // child class will looking nearest propety or method 
    // If in child class doesn't have property or method then will looking on parent class
    public function __construct($title = "null", $author = "null", $publisher = "null", $price = 0, $page, $discount)
    {
        // Override constructor
        parent::__construct($title, $author, $publisher, $price, $discount);
        $this->page = $page;
    }

    public function getPage()
    {
        return "Page: {$this->page}";
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getDetailsInformation()
    {
        // Ovveride 
        return "Comic" . parent::getDetailsInformation() . "{$this->getPage()} pages \n";
    }
}

class Game extends Products
{
    // Property
    private $hours;

    // put general and spesifik material that you need
    public function __construct($title = "null", $author = "null", $publisher = "null", $price = 0, $hours, $discount)
    {
        // Override constructor function from parent 
        // Choose what general property that u want to use from parent class
        parent::__construct($title, $author, $publisher, $price, $discount);
        $this->hours = $hours;
    }

    public function getHours()
    {
        return "Hours : {$this->hours} ";
    }

    public function getDetailsInformation()
    {
        return "Game: " . parent::getDetailsInformation() . "{$this->getHours()} hours";
    }
}


// Using object as a datatype
// class PrintProductInformation    
// {
//     public function detailInformation(Products $product)
//     {
//         return  "{$product->getTitle()} | {$product->getAuthor()} {$product->getPublisher()} (Rp. {$product->getPrice()}) \n";
//     }
// }



// Instance / create object

// $product1 = new Products("Valhalla", "Rising Kishimoto", "PT. Tendo", 350000);
// $product1 = new Comic("Naruto", "Masashi Kishimoto", "PT. Gramedia", 10000);

// After override constructor
$comic1 = new Comic("Naruto", "Masashi Kishimoto", "PT. Gramedia", 10000, 120, 10);
$game1 = new Game("Valhalla", "Arigato Kimochi", "PT. Arigatou", 20000, "~ 50", 50);

echo $comic1->getDetailsInformation();
echo $game1->getDetailsInformation();
echo "\nPrice: {$game1->getPrice()} \n";
$game1->setDiscount(20);
echo $comic1->getPriceWithDiscount();
echo "Price with discount: {$game1->getPriceWithDiscount()}";





// $productInformation = new PrintProductInformation();
// echo $productInformation->detailInformation($product1);

// echo $product1->informationDetails($Comic1->getPage());
// echo $product2->informationDetails($Game1->getHours());
