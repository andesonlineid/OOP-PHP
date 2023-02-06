<?php

require_once "App/init.php";

// instance using namespace
// $Vanish = new App\CleanerProducts\FloorCleaner(
//     "Vanish Purple",
//     "Prof. Teno",
//     "PT. Euripsi",
//     30000,
//     "Lavender"
// );


// Using alias / a.k.a / other name
use App\CleanerProducts\Chemical as CleanerProductsChemical;
use App\Composition\Chemical as CompositionChemical;

$testNamespace1 = new CleanerProductsChemical();
echo $testNamespace1->chemicalMaterials();

// $testNameSpace2 = new App\Composition\Chemical();
// echo $testNameSpace2->chemicalMaterials();
$testNamespace2 = new CompositionChemical();
echo $testNamespace2->chemicalMaterials();
