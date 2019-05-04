<?php

echo count($_SERVER) . '<br/>';
foreach ($_SERVER as $key => $value){
    echo "{$key} = {$value}<br>";
}
