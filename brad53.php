<?php
$dstW = 320; $dstH = 320;
$src = imagecreatefromjpeg("upload/w.jpg");
$dst = imagecreate($dstW, $dstH);

$srcW = imagesx($src); $srcH = imagesy($src);

if ($srcW > $srcH){
    $dstX = $dstW;
    $dstY = ?
}else{
    $dstY = $dstH;
    $dstX = ?
}



imagecopyresized ( $dst, $src, 0 , 0 , 0 , 0 ,
    $dstX , $dstY ,$srcW , $srcH ) ;

//// 3. display
//header("Content-type: image/jpeg");
//imagejpeg($dst);

// 4. free
imageDestroy($src);
imageDestroy($dst);



?>