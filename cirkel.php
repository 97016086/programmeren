<?php

$diameter= readline("voer de diameter van een cirkel in :");
$exponent=2;

$som = $diameter * pi();
$oppervlakte = pi() * pow($diameter,$exponent) ;

echo "\n de omtrek van de cirkel is $som";
echo "\n de oppervlakte van de cirkel is $oppervlakte";



?>