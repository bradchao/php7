<?php
    $rate = $_GET['rate'];

    // 1. new canvas
    $img = imageCreateTrueColor(400, 24);

    // 2. drawing
    $yellow = imagecolorallocate($img, 255, 255, 0);
    $green = imagecolorallocate($img, 0, 255, 0);
    $red = imagecolorallocate($img, 255, 0, 0);
    imagefill($img, 0, 0,$green);
    imagefilledrectangle($img, 0, 0, 400*$rate/100, 24, $red);

    // 3. display
    header("Content-type: image/jpeg");
    imagejpeg($img);

    // 4. free
    imageDestroy($img);
?>