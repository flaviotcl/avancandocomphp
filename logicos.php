<?php

$media  = 7;
$frequencia  = 75;

$mediaAluno = 4;
$frequenciaAluno = 50;


if ( $mediaAluno >= $media || $frequenciaAluno >= $frequencia){
    echo "Aprovado";
}else{
    echo "Reprovado";
}


if ( $mediaAluno >= $media && $frequenciaAluno >= $frequencia){
    echo "Aprovado";
}else{
    echo "Reprovado";
}

$chovendo = true;

if(!$chovendo){
    echo "Vou ficar em casa";
}else{
    echo "Vou pra piscina";
}