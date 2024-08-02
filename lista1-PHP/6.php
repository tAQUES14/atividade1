<?php
    $palavra = 'substituto';
    $reversa = strrev($palavra);

    if($palavra == $reversa )
        echo $palavra . 'é um palindromo';
    else{
        echo $palavra . ' nao é um palindromo';
        };
?>

