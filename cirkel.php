<?php
$diameter= rand(1,100);
$getal = readline("voer de diameter van een cirkel in :");
$pi=3.14;


$som = $diameter * $pi;
$straal = 0.5 * $diameter;
$oppervlakte = $pi * $straal * $straal;

echo "\nde omtrek van de cirkel is $som ";
echo "\nde oppervlakte van de cirkel is $oppervlakte";



?>