<?php

$leeftijd=readline("Voer hier uw leeftijd in:");




if($leeftijd < 9) {
    exit;
}

if($leeftijd > 118) {
    exit;
}

if ($leeftijd == 62) {
    echo "Over vijf jaar wordt je 67!";
}

switch ($leeftijd) {
    case 10;
    case 16;
    case 50;
    case 67;
    case 100;
        echo "Gefeliciteerd!";
        break;
}





















?>