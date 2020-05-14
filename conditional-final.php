<?php

$media =7;
$mediaRecuperacao =5;
$frequencia  = 70;


$mediaAluno = 6.9;
$frequenciaAluno = 80;


$reprovado_por_faltas = $frequenciaAluno < $frequencia ? true : false;

if (!$reprovado_por_faltas){

    if($mediaAluno < $mediaRecuperacao){
        echo "Reprovado !";
    }else if ($mediaAluno < $media){
        echo "Recuperação !";
    }else{
        echo "Aprovado !";
    }
}else{
    echo "Reprovado por Faltas";
}
