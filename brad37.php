<?php
    date_default_timezone_set("Asia/Taipei");
    $mydir = "mydir";
    $fp = @opendir($mydir) or exit("Server Busy3");

    while ( $file = readdir($fp)){
        if (is_dir("{$mydir}/{$file}")){
            echo "[Dir]{$file} : ";
        }elseif (is_file("{$mydir}/{$file}")){
            echo "[File]{$file} : ";
        }

        echo filesize("{$mydir}/{$file}") . 'bytes ';
        echo date("Y-m-d H:i:s", filemtime("{$mydir}/{$file}")) . '<br>';

    }

    closedir($fp);

?>