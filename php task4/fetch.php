<?php
$api = 'https://raw.githubusercontent.com/thatisuday/indian-cities-database/master/cities.json';
$data = file_get_contents($api);

$arr = json_decode($data,true);
$a = $_POST['state'];

$city = "<option> chosee city</option>"; 

foreach($arr as $val){
    if(strtolower(trim($val['state']))==strtolower(trim($a))){
       
       $city .= '<option>'.$val['city'].'</option>';
    }
}
echo $city;

?>
<!-- $q = "select * from reg where id= 1";
$z = mysqli_query($q, $con);
mysqli_fetch_array($z); -->

