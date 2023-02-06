<?php

function my_autoloader($class)
{


    // See whats class inside product directory
    // require_once "CleanerProducts" . "$class" . '.php';

    // $class variable now contains namespace address
    $class = explode("\\", $class);

    // we just want to get the class name
    $className = end($class);

    require_once __DIR__ . "\CleanerProducts" . '\\' . $className . ".php";
}

function my_autoloader2($class)
{
    $class = explode("\\", $class);
    $className = end($class);
    require_once __DIR__ . "\Composition" . "\\" . $className . '.php';
}

spl_autoload_register('my_autoloader');
spl_autoload_register('my_autoloader2');
