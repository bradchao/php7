<?php
    $mysqli = new mysqli('localhost','root','root','iii');
    $mysqli->set_charset('utf8');

    $sql = "SELECT id,cname,birthday,memo FROM member";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows >0 ){
        $stmt->bind_result($id,$cname,$birthday,$memo);
    }


?>