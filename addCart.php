<?php
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });
    session_start();

    $cart = $_SESSION['cart'];
    $pid = $_GET['pid']; $num = $_GET['num'];
    $cart->addProduct($pid, $num);

