<?php
class Cart {
    private $list;  // $list['pid'] = num;

    function __construct(){
        $this->list = array();
    }

    function getList(){
        return $this->list;
    }

    function getItemNum($pid){
        if (isset($this->list["$pid"])){
            return $this->list["$pid"];
        }else{
            return 0;
        }
    }

    function addProduct($pid, $num){
        $this->list["$pid"] = $num;
    }

    function removeProduct($pid){
        unset($this->list["$pid"]);
    }

    function clearCart(){
        $this->list = array();
    }
}