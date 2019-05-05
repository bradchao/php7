<?php

    if (isset($_FILES['upload'])){
        $upload = $_FILES['upload'];

        if ($upload['error'] == 0){
//            if (copy($upload['tmp_name'], "upload/{$upload['name']}")){
//                echo 'Upload Success';
//            }else{
//                echo 'Upload Fail';
//            }

            if (is_uploaded_file($upload['tmp_name'])){
                if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
                    echo 'OK';
                }else{
                    echo 'haha';
                }
            }else{
                echo 'no';
            }

        }

    }else{
        echo 'xx';
    }

?>