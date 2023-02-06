<?php



// Static Keyword
// We can access / read property and method inside class without instance object from class

class Person
{
    // Static value will never change even if we instance object repeatedly
    public static $name = "Cahyono";
    public static $age;

    public function __construct($name, $age)
    {
        $this->$name = $name;
        $this->$age = $age;
    }

    // we use static keyword as a function for helper function
    public static function sayHello()
    {
        // We can't use this because we're not instance object from class
        return "Hello my name is " . self::$name;
    }
}

// Static value will never change
$person1 = new Person("Romauli", 27);

echo Person::sayHello();