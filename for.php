<?php

for($i = 0; $i <=10; $i++){
    echo "$i <br>";
}


$frutas= [
            'banana',
            'maçã',
            'laranja',
            'melancia'
        ];

$count = count($frutas);
for($i=0; $i < $count; $i++){
    echo "$frutas[$i] <br>";
}