<?php
    $frase = 'essa frase nao tem1 espaco em branco';
    $palavras = str_split($frase);
    $tam = strlen($frase);
    $i;
    for($i=0; $i<$tam; $i++) {
        if($palavras[$i] == ' ') {
            $i++;  
        }
        echo $palavras[$i];
    }
?>