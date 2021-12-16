<?php 
$deeltal=readline("Geef een getal:");
$deler=readline("Geef nog een getal:"); 

 $delen=$deeltal%$deler;

 
 if ($delen!= 0) {
echo "er blijft een restgetal over.";
 }else{
echo "er blijft geen restgetal over.";
 }



 ?>