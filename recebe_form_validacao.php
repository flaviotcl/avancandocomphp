<?php

/********
 * 
 *  function empty() trata os seguintes valores como vazio:
 *  - " ", 0 , false , null , array()
 * 
 *  function trim() retira espaços do começo e do fim da variável.
 * 
 */


 $nome = empty(trim($_POST['nome']));
 
 if($nome): echo "Informe o nome !"."<br><br>"; 
 else: 
    echo "<strong>Nome: </strong>";
    echo $_POST['nome']."<br>"; 
    echo "<br>";
 endif;


 $interesses = $_POST['interesse'] ?? null;

 if(is_null($interesses)): echo "Selecione pelo menos um item de interesse"; 
 else: 
    echo "<strong>Interesses:</strong> "."<br>";
        echo "<ul>"; 
            foreach($interesses as $interesse):
                echo "<li>".$interesse."</li>";
            endforeach;
        echo "</ul>";
        echo "<br>";

endif;

// function strip_tags retira tags html e php da String.
$msg = strip_tags($_POST['mensagem']) ?? null;

echo $msg;


?>