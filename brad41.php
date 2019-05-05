<?php

    $content = file("mydir/file4.txt");
    echo gettype($content);
    foreach ($content as $k => $v){
        echo " => {$k} : {$v} <br>";
    }

?>