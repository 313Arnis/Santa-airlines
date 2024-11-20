<?php

require "Aircraft.php";
require "Airport.php";
require "Flight.php";
echo "ERROR 404 TU NEMAKI PROGRAMMET";

$x = 9;

function addFour ($x){
    $rezultats = $x + 4;
    echo "<br> $rezultats";
}

addFour(9);
echo "<br>";


$rigasLidosta = new Airport ("RIX", 56.924, 23.971);
$dubajasLidosta = new Airport ("DXB", 25.2567, 55.3643);
$manaLidmasina = new Aircraft ("Airbus", "A220-300", 120, 850);
$departureTime = new DateTime();
$flight = new Flight ("SA503", $rigasLidosta, $dubajasLidosta, $departureTime, $manaLidmasina);
var_dump($manaLidmasina);
echo "<br>";
var_dump($rigasLidosta);
echo "<br>";
var_dump($flight);