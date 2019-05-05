<?php
    $fp = @fopen("https://tw.stock.yahoo.com/q/bc?s=2317", 'r');

    while ($line = fgets($fp)){

        if (preg_match('/href/', $line)){
            //echo nl2br($line) . '<br>';
            if (preg_match('/2317/', $line)){
                echo $line;
            }
        }

    }
?>