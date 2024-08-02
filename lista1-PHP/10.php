<?php
function ehPangrama($texto) {
    $texto = strtolower($texto);
    $alfabeto = range('a', 'z');

    foreach ($alfabeto as $letra) {
        if (strpos($texto, $letra) === false) {
            return false;
        }
    }

    return true;
}

$texto = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
if (ehPangrama($texto)) {
    echo "O texto é um pangrama.";
} else {
    echo "O texto não é um pangrama.";
}
?>