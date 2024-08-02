<?php
    $frase = "essa frase serve para ser contada, apenas isso";

    $palavras = explode(" ", trim($frase));
    
    $cont = count($palavras);
   
    echo "Número de palavras: " . $cont . "<br>";
    
    foreach ($palavras as $palavra) {
        echo $palavra . "<br>";
    }

?>