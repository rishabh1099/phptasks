<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "reg";

$con = mysqli_connect($server,$username, $password, $db);
if(!$con){
    echo "not connected";
}else{
    echo " connected";
}
?>