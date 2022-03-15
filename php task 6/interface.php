<?php

interface Animals{
    public function name();
    public function favourite();
}

 interface birds extends Animals{
     
     function nationalBird();
     function favouriteBird();
}
class details implements birds{
    function name(){
        echo "Lion is wild animal";
    }
    function favourite(){
        echo "favourite animal is Tiger";
    }
    function nationalBird(){
        echo "Peacock is National Bird";
    }
    function favouriteBird(){
        echo "favourite bird is Peacock";
    }
}

$obj = new details;
$obj -> name();
echo "<br>";
$obj -> favourite();
echo "<br>";
$obj -> nationalBird();
echo "<br>";
$obj -> favouriteBird();
echo "<br>";
?>