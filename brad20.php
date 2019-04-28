<?php
    $a = [];
    $a[] = 1;
    $a[] = 2;
    var_dump($a);
    echo '<br>';
    echo count($a) . '<br>';
    $a[10] = 12; $a[1] = 12.3; $a[2] = 'Brad';
    echo count($a) . '<br>';
    var_dump($a);
    echo '<br>';
    $a[] = 100;
    $a[] = 200;
    var_dump($a);
