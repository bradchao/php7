<?php
    include 'bradutil.php';
    session_start();
    $var  = array(1,2,3);
    $_SESSION['var'] = $var;
    $var[] = 123;
    foreach ($var as $k => $v){
        echo "{$k} : {$v}<br>";
    }

    $s1 = new Student(90,50,30);
    echo $s1->calSum() . '<br>';
    echo $s1->calAvg() . '<br>';
    $_SESSION['s1'] = $s1;

    echo '<hr>';
    $s1->changeCH(10);
    echo $s1->calSum() . '<br>';
    echo $s1->calAvg() . '<br>';



?>
<a href="brad57.php">Next</a>
