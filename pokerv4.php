<?php
    $poker = range(0,51);
    shuffle($poker);
    foreach ($poker as $v){
        echo "{$v}<br>";
    }
    echo '<hr>';
    $players = array(array(),array(),array(),array());
    foreach ($poker as $i => $card){
        $players[$i % 4][(int)($i/4)] = $card;
    }
    foreach ($players[1] as $v){
        echo "{$v}<br>";
    }
