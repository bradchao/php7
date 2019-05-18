<?php
class Member {
    private $id, $name, $account, $passwd;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function sayHello(){
        return "Hello, {$this->name}";
    }
}
?>