<?php
    include_once 'sql.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });

    $myquery = new MyQuery($mysqli);

    $pname =  $myquery->getProductData(3, MyQuery::QUERY_PNAME);
    $price =  $myquery->getProductData(3, MyQuery::QUERY_PRICE);
    echo "{$pname} : {$price}";


?>