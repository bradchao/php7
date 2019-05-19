<?php
    $dsn = "mysql:host=localhost;dbname=iii";
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    $pdo = new PDO($dsn, "root","root", $options);

    $result = $pdo->prepare("SELECT * FROM product");
    //echo $result->rowCount() . '<hr />';

    $result->execute();

    while ($product = $result->fetch(PDO::FETCH_OBJ)){
        $id = $product->id;
        $price = $product->price;
        echo "{$id} : {$price}";
        echo '<hr />';
    }




?>