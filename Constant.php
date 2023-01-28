<?php

// If we set value of constant
// the value will never change


// First way to use constant idenfier
// We can't use define keyword inside class 
// Define is global constant
define("AGE", 27);

class Person
{
    // second way to create constant identifier
    // Using const we can use inside class
    public const NAME = "Andesta";

    public function __construct()
    {
    }

    public  function sayHello()
    {
        // acces const keyword inside class
        return "hello my name is " . Person::NAME;
    }
}


$firstPerson = new Person();

// Access const inside class
echo Person::NAME;
// accest constant keyword outside class (define keyword);
echo AGE;


// Magic constant (built in php)
__LINE__;