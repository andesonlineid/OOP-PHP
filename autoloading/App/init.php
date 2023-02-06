<?php

function my_autoloader($class)
{
    // See whats class inside product directory
    require_once "CleanerProduct/" . "$class" . '.php';
}

spl_autoload_register('my_autoloader');
