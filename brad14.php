<?php
    $a = 11; $b = 8;
    switch ($a){
        case 1:
            echo 'A';
            break;
        default:
            echo 'Z';
            break;
        case $b + 2:
            echo 'B3';
            //break;
        case 10:
            echo 'B2';
            //break;
        case 100:
            echo 'C';
            break;
    }
    echo '<br>Game Over';