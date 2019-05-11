<?php
    include 'bradutil.php';
    session_start();

    $ary = $_SESSION['var'];
    echo gettype($ary);
    foreach ($ary as $k => $v){
        echo "{$k} : {$v}<br>";
    }


    $s1 = $_SESSION['s1'];
    echo gettype($s1);
    echo $s1->calSum();

?>