<?php
    $person['name'] = 'Brad';
    $person['age'] = 18;
    $person['weight'] = 81;

    foreach ($person as $k => $v){
        echo "{$k} : {$v}<br>";
    }
