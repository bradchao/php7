<?php
    function test1($x, $y) : string {
        return $x / $y;
    }


    $d = test1(10,3);
    echo gettype($d) . ":". $d;

?>