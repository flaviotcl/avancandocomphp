<?php

$contador = 0 ;

// O comando Break encerra o laço de repetição.
/****************
    while($contador <= 10){


    echo "$contador"."<br>";


    if($contador == 3){
        break;
    }

    $contador = $contador+1;

    }
****************/

/***********
 *  O comando continue para a execução, não executa as pŕoximas instruções 
 *  e segue p/ pŕoximo laço da repetição, no entanto se faz necessário a 
 *  colocação do incremento do contador antes do comando continue, para
 *  não gerar loop.
 * 
 **********/
 /**********
    while($contador <= 10){

        $contador = $contador+1;
        
        if($contador % 2 != 0){
            continue;
        }

        echo "$contador"."<br>";      
       
      
    }
**********/



$numero = 8;
$contador = 0;


while($contador <= 10){

$result = $numero*$contador;
echo "$numero x $contador = $result <br>";
$contador = $contador + 1 ;


}