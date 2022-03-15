<?php 

class Animals{
   
    static $className = "This is static keyword";
   
    function wildAnimal(){
         echo "Lion is the favourite wild animal";
    }
}

class favourite extends Animals{
        function wildAnimal(){
            echo "Tiger is the favourite wild animal";
        }
}
echo Animals::$className;
echo "<br>";
$obj = new favourite;
$obj->wildAnimal();
?>