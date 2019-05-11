<?php
    $mysqli = new mysqli('localhost','root','root','iii');
//    $mysqli = mysqli_connect('localhost','root','root','iii');

    //echo $mysqli->connect_errno . ":" . $mysqli->connect_error;
    $mysqli->set_charset('utf8');

    $cname = '布萊德';
    $birthday = '1998-03-04';
    $memo = 'abcdefg';

    $sql = "INSERT INTO member (cname,birthday,memo) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss',$cname, $birthday, $memo);
    $stmt->execute();

    $affectedRows = $stmt->affected_rows;
    echo $affectedRows;


?>