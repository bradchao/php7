<?php
    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];
    if (isset($_REQUEST['like'])){
        $like = $_REQUEST['like'];
        echo gettype($like);
        foreach ($like as $k => $v){
            echo "{$k} => {$v}<br>";
        }
    }

?>