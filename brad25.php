<?php
    $ary[0] = 123;
    $ary[1] = array(7,6,5,4);
    $ary[1][] = array(1,2,3);

    echo count($ary[1][4]) . '<br>';

    foreach ($ary as $v){
        if (is_array($v)){
            foreach ($v as $vv){
                if (is_array($vv)){
                    foreach ($vv as $vvv){
                        echo "{$vvv}<br>";
                    }
                }else{
                    echo "{$vv}<br>";
                }
            }
        }else{
            echo "{$v}<br>";
        }
    }
