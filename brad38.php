<?php

    if (@mkdir("mydir/dir2")){
        echo 'OK';
    }else{
        echo 'XX';
    }

    $fp = @fopen("mydir/file4.txt","a+");
    fwrite($fp, "Hello, 資策會\n");

    fflush($fp);
    fclose($fp);



