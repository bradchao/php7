<?php
    $a = 10; $b = 3;

    if ($a >= 10 || ++$b <= 3) {
        echo "OK: {$a}, {$b}";
    }else{
        echo "XX: {$a}, {$b}";
    }

    echo '<hr>';
    echo 2 ^ 3;     // xor
    echo '<hr>';

    $x = 3; $y = 10;
    echo $x <=> $y;
