<?php
    $ch = curl_init("http://www.bradchao.com/apptest/posttest1.php");

    $dataString = "name=Brad&age=19";

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $ret = curl_exec($ch);
    curl_close($ch);

    echo $ret;


?>