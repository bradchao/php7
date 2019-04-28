<?php
    $n = 24; $isPrime = true;

    echo sqrt(-24);

    for ($i  = 2; $i<$n; $i++){
        if ($n % $i == 0){
            $isPrime = false;
            break;
        }
    }

    if ($isPrime){
        echo 'Yes';
    }else{
        echo 'No';
    }