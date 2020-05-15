<?php



function checkGet($parametro){
    /**  
    if(isset($_GET[$parametro]) ){
        return $_GET[$parametro];
    }else{
        return false;
    }
     */
    $result = isset($_GET[$parametro]) ? $_GET[$parametro] : false;
    return $result;
}
$queryString1 = 'planeta';
$queryString2 = 'cor';
$checkedQueryString1 = checkGet($queryString1);
if( $checkedQueryString1 != false ){
    echo $checkedQueryString1;
    echo "<br>";
}else{
    echo "Planeta não informado !";
    echo "<br>";
}

$checkedQueryString2 = checkGet($queryString2);

if( $checkedQueryString2 != false ){
    echo $checkedQueryString2;
    echo "<br>";
}else{
    echo "Cor não informada !";
    echo "<br>";
}



echo "<br>";
$cor = $_GET['cor'] ?? 'Cor Ñ Informada !';
echo $cor;