<?php
    include_once 'sql.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });

    $myquery = new MyQuery($mysqli);

    $pids = $myquery->getAllPid("id > 10");

    foreach ($pids as $pid){
        $pname =  $myquery->getProductData($pid, MyQuery::QUERY_PNAME);
        $price =  $myquery->getProductData($pid, MyQuery::QUERY_PRICE);
        echo "{$pid} : {$pname} : {$price}<br />";
    }


?>