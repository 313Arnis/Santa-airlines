<?php

require "Aircraft.php";
require "Airport.php";

echo "ERROR 404 TU NEMAKI PROGRAMMET";

$x = 9;

function addFour ($x){
    $rezultats = $x + 4;
    echo "<br> $rezultats";
}

addFour(9);
echo "<br>";


$manalidosta = new Airport ("RIX", 56.924, 23.971);
$manaLidmasina = new Aircraft ("Airbus", "A220-300", 120, 850);
var_dump($manaLidmasina);
echo "<br>";
var_dump($manalidosta);