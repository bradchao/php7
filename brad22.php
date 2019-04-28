<?php
    $p = array(1 => 0,0,0,0,0,0);

    for ($i=0; $i<1000000; $i++){
        $point = rand(1,9);
        $p[$point>6?$point-3:$point]++;
    }

    for ($i=1; $i<=6; $i++){
        echo "{$i}點出現{$p[$i]}次<br>";
    }
    echo '<hr>';

    foreach ($p as $key => $value){
        echo "{$key}點出現{$value}次<br>";
    }
