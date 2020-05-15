<?php


function soma($a , $b=5){
   // echo $a + $b;
   return $a + $b;
}

$soma = soma(2,3);
echo $soma;

echo "<br>";

$soma = soma(2);

echo $soma;