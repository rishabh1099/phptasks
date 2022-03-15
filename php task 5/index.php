<?php 

class vehicle{
    public $max_speed = "100 km/h";
    public $milage = "20kmph";

    function __construct($speed, $miles)
    {
        $this->max_speed = $speed;
        $this->milage = $miles;
    }

    function run(){
       echo "Speed is - ";
       echo $this->max_speed;
       echo "<br>";
       echo "And milage is - ";
       echo $this->milage;
       echo "<br>";
    }

}
 class bus extends vehicle{
    public $color = "red";
    function __construct($speed, $miles){
        $this->max_speed = $speed;
        $this -> milage = $miles;
    }

 }

$obj = new vehicle("200 km/h" , "10 kmpl");
echo "This is Vehicle class <br>";
$obj->run();
echo"<br>";

$obj2 = new bus("130 km/h ", "10 kmpl");
echo "This is Bus class <br>";
$obj2 -> run();
echo"<br>";
echo " the bus color is - ".$obj2->color; 
