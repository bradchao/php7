<?php
    $id = $_REQUEST['id'];

    for ($i=1; $i<10; $i++){
        $pfile = "pimgs/p_{$id}_{$i}.jpg";
        if (file_exists($pfile)){
            echo "<img src='{$pfile}' /><br />";
        }
    }


?>