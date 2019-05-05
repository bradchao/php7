<?php

    $filename = $_REQUEST['filename'];
    $content = $_REQUEST['content'];

    $fp = @fopen("mydir/{$filename}", 'w+');
    if (fwrite($fp, $content)){
        header("Location: mydir/{$filename}");
    }
?>