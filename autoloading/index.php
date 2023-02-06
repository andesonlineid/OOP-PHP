<?php

require_once "App/init.php";

$Vanish = new FloorCleaner(
    "Vanish",
    "Prof. Teno",
    "PT. Euripsi",
    30000,
    "Lavender"
);

echo $Vanish->getInfo();
