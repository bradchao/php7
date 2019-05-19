<?php
class MyMath extends CI_Model{
    public function __construct(){
        echo 'MyMath here';
    }

    public function add($x , $y){
        return $x + $y;
    }

}

?>