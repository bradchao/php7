<?php

    $upload = $_FILES['upload'];
//    foreach ($upload as $k => $v){
//        echo $k . '<br>';
//        var_dump($v);
//        echo "<hr>";
//    }

    foreach ($upload['error'] as $k => $v){
        if ($v == 0){
            if (is_uploaded_file($upload['tmp_name'][$k])){
                if (move_uploaded_file($upload['tmp_name'][$k], "upload/{$upload['name'][$k]}")){
                    echo "OK:{$k}<br>";
                }else{
                    echo 'haha';
                }
            }else{
                echo 'no';
            }

        }
    }



?>