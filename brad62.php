<?php
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });

    $obj1 = new MyClass1();
    $obj2 = new MyClass2();

    echo $obj1->showMe() . '<br />';
    echo $obj2->showMe();

?>