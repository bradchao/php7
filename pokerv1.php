<?php
    $poker = [];
    for ($i=0; $i<52; $i++){
        $rand = rand(0,51);

        // 檢查機制
        $isDup = false;
        for ($j=0; $j<$i; $j++){
            if ($poker[$j] == $rand){
                $isDup = true;
                break;
            }
        }

        if ($isDup){
            $i--;
        }else{
            $poker[$i] = $rand;
        }
    }

    foreach ($poker as $v){
        echo "{$v}<br>";
    }