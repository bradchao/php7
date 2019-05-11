<?php
    $mysqli = new mysqli('localhost','root','root','iii');
    $mysqli->set_charset('utf8');

    $sql = "SELECT id,cname,birthday,memo FROM member";
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();

    $ret = new stdClass();
    if ($stmt->num_rows >0 ){
        $ret->result = 0;
        $stmt->bind_result($id,$cname,$birthday,$memo);

        $row = [];
        while ($stmt->fetch()){
            $row['id'] = $id;
            $row['cname'] = $cname;
            $row['birthday'] = $birthday;
            $row['memo'] = $memo;

            $ret->data[] = $row;
        }

//        foreach ($data as $row){
//            echo "{$row['id']}:{$row['cname']}:{$row['birthday']}:{$row['memo']}<br>";
//        }

    }else{
        $ret->result = -1;
    }

    $stmt->free_result();
    $stmt->close();

    echo json_encode($ret);
?>