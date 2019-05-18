<?php
    $ch = curl_init("http://www.bradchao.com/apptest/posttest2.php");

    $data = array("name" => "Eric", "age" => "28");
    $dataString = json_encode($data);


    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER,
        array("Content-type: application/json; charset=utf-8",
            "Content-Length: " . strlen($dataString)));

    $ret = curl_exec($ch);
    curl_close($ch);

    echo $ret;


?>