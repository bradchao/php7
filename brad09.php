<?php

$score = rand(0,100);
echo $score . '<br>';
if ($score >= 90){
    echo 'A';
}elseif ($score >= 80){
    echo 'B';
}elseif ($score >= 70){
    echo 'C';
}elseif ($score >= 60){
    echo 'D';
}else{
    echo 'E';
}



