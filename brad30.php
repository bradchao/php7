<?php
    sayYa();
    sayYa();
    sayYa();

    sayHello("Brad");
    sayHello("Eric");
    sayHello("Tony");

    sayHelloV2("Peter");
    sayHelloV2();
    echo '<hr />';
    sayHelloV3(4, "Brad");
    sayHelloV3(2);
    echo '<hr />';
    sayHelloV4(1,2,3,'brad');
    echo '<hr />';

    $v1 = calXY(3,4);
    echo $v1;
    echo calXY(2,1);


    function sayYa(){
        echo "Ya<br>";
    }

    function sayHello($name){
        echo "Hello, {$name}<br/>";
    }

    function sayHelloV2($name = 'World'){
        echo "Hello, {$name}<br/>";
    }

    function sayHelloV3($n, $name = 'World'){
        for ($i=0; $i<$n; $i++){
            echo "Hello, {$name}<br/>";
        }
    }

    function sayHelloV4(){
        $args = func_get_args();
        foreach ($args as $k => $v){
            echo "{$k} : {$v}<br>";
        }
    }

    function calXY($x, $y){
        $ret = 2 * $x + $y;
        //return $ret;
    }


?>