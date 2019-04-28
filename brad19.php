<?php

for($k=0; $k<10; $k++){
    for ($j=10; $j>0; $j--){
        for ($i=1; $i<10; $i++){
            if ($i % 7 == 0){
                //break 3;
                goto brad;

            }
            echo "{$i}:{$j}:{$k}<br>";
        }
    }
}
brad:
echo 'Game Over';