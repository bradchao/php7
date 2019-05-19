<?php
    $jsondata = json_decode(file_get_contents("php://input", true));

    $name = $jsondata['name'];
    $age = $jsondata["age"];


    echo "Hello, {$name} : {$age}";


?>