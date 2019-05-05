<?php
    $img = imagecreatefromjpeg("upload/coffee.jpg");


    $yellow = imagecolorallocate($img, 255,255,0);
    imagettftext ( $img,36,30, 100, 436
            ,$yellow, "fonts/ALGER.TTF", "Hello, World" );

    // 3. display
    //header("Content-type: image/jpeg");
    imagejpeg($img, "upload/newimg.jpg");

    // 4. free
    imageDestroy($img);
?>