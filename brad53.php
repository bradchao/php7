<?php
$dstW = 240; $dstH = 240;
$src = imagecreatefromjpeg("upload/h.jpg");
$srcW = imagesx($src); $srcH = imagesy($src);

if ($srcW > $srcH){
    $dstX = $dstW;
    $dstY = $dstH * $srcH / $srcW;
}else{
    $dstY = $dstH;
    $dstX = $dstW * $srcW / $srcH;
}

$dst = imagecreate($dstX, $dstY);



//echo "{$srcW} x {$srcH}<br>";
//echo "{$dstX} x {$dstY}<br>";

//imagecopyresized ( $dst, $src, 0 , 0 , 0 , 0 ,
//    $dstX , $dstY ,$srcW , $srcH ) ;
imagecopyresampled ( $dst, $src, 0 , 0 , 0 , 0 ,
    $dstX , $dstY ,$srcW , $srcH ) ;

//// 3. display
//header("Content-type: image/jpeg");
imagejpeg($dst, "upload/hhh.jpg");

// 4. free
imageDestroy($src);
imageDestroy($dst);



?>