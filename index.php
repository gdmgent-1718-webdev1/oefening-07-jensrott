<?php

// fibonnaci sequence

$x = 0;
$y = 1;

function fibo($x, $y) {

    for ($i = 0; $i <= 10; $i++) {
        $z = $x + $y;
        echo $z . "<br>";
        // Het ene getal wordt dan het nieuwe getal bv. 0 wordt dan 1 
        $x = $y;
        $y = $z;
    }
}

fibo($x, $y);

?>