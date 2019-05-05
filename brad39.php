<?php

    $fp = @fopen("mydir/file4.txt", 'r');

    while ($c = fgetc($fp)){
        echo nl2br($c);
    }


    fclose($fp);


?>