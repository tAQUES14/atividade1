
<?php
$numero = 10;
$divisor = 0;
$i = 1;


while ($i <= $numero) {
    if ($numero % $i == 0) {
        $divisor = $divisor + 1;
    }
    $i = $i + 1;
}


if ($divisor == 2) {
    echo $numero . ' é primo';
} else {
    echo $numero . ' não é primo';
}
?>