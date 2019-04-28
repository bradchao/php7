<?php
    $a = 10; $b = 8;
    switch ($a){
        case 1:
            echo 'A';
            break;
        case $b + 2:
            echo 'B3';
            break;
        case 10:
            echo 'B2';
            break;
        case 100:
            echo 'C';
            break;
        default:
            echo 'Z';
    }
    echo '<br>Game Over';