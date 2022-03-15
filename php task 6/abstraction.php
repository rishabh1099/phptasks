<?php 

abstract class vehicle{
    public $category = "Vehicle";
    abstract public function details();
    abstract public function favourite();

    public function print(){
        echo "This is parent class name .$this->category";
    }

}
abstract class Car extends vehicle{
        function details(){
            $this->category = "car";
            $name = "Audi";
            echo "Your vehicle is .$this->category.";
        }
        abstract public function favourite();
}
class bike extends Car{
        
        function favourite(){
            echo "my favourite vehicle is Bike";
        }
}
$obj = new bike;
$obj -> print();
echo "<br>";
$obj->details();
echo "<br>";
$obj->favourite();
?>