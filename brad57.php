<?php
    include 'bradutil.php';
    session_start();

    foreach ($_SESSION as $k => $v){
        echo "{$k} :" . gettype($v) . '<br>';
    }



    $s1 = $_SESSION['s1'];
    echo gettype($s1);
    echo $s1->calSum();

?>
<a href="brad58.php">Logout</a>
