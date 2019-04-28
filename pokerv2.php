<?php
    $poker = [];
    for ($i=0; $i<10; $i++){
        do {
            $rand = rand(0,9);
            // 檢查機制
            $isDup = false;
            for ($j=0; $j<$i; $j++){
                if ($poker[$j] == $rand){
                    $isDup = true;
                    break;
                }
            }
        }while ($isDup);

        $poker[$i] = $rand;

    }

    foreach ($poker as $v){
        echo "{$v}<br>";
    }