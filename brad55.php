<?php
class Bike {
    protected $speed = 0.0; // var => public

    // public
    public function __construct(){ // Object init
        echo 'here';
        $this->speed = 1.2;
    }

    function __destruct(){
        //echo 'die';
    }

    function upSpeed(){
        $this->speed = $this->speed<1 ? 1 : $this->speed*1.2;
    }
    function downSpeed(){
        $this->speed = $this->speed<1 ? 0 : $this->speed*0.7;
    }
    function  getSpeed(){
        return $this->speed;
    }
}

class Scooter extends Bike{
    private $gear = 1;
    function __construct(){
        parent::__construct();
        echo 'I am Scooter';
        $this->speed = 12;
    }
    function chGear($g){$this->gear = $g;}
    // Override
    function upSpeed(){
        $this->showWhat('ready..');
        $this->speed = $this->speed<1 ? 1 : $this->speed*$this->gear;
    }
    function showWhat($mesg){
        echo $mesg;
    }
}


$b1 = new Bike; $b2 = new Bike;
$b1->upSpeed(); $b1->upSpeed();$b1->upSpeed();$b1->upSpeed();
echo $b1->getSpeed();
$b2 = null;
echo '<hr>';
$b1->downSpeed();$b1->downSpeed();$b1->downSpeed();
echo $b1->getSpeed();
echo '<hr>';
echo 'play Scoooter<br>';
$s1 = new Scooter();
$s1->chGear(4);
$s1->upSpeed();$s1->upSpeed();
echo $s1->getSpeed();

?>