<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Document</title>
</head>

<body>
    <div id="container">
       <h1>BMI calculator</h1><hr>
       <form method="POST"  onsubmit="return myfun()">
                <label for="height">Height :</label><br><br>
                <input type="number" id="feet" name="feet" placeholder="Enter feet">
              
                <input type="number" id="inch" name="inch" placeholder="Enter inches">
               
                <br><br>
                <label for="weight">Weight :</label><br><br>
                <input type="number" id="weight" name="weight" placeholder="Enter Weight">
                
                <br><br>
                <input type="submit" name="submit">
           
       </form>
    </div>
 <script>
    function myfun() {
        var feet = document.getElementById('feet').value;
        var inch = document.getElementById('inch').value;
        var weight = document.getElementById('weight').value;
        if (feet < 1) {
            alert("invalid height");
            return false;
        } else if (inch < 1) {
            alert("invalid height");
            return false;
        }else if (weight < 1) {
            alert("invalid ename");
            return false;
        }else{
            return true;
        }
 
    }
    </script>
 <?php 
 
 if(isset($_POST['submit'])){
     $feet = $_POST['feet'];
     $inch = $_POST['inch'];
     $weight = $_POST['weight'];

     if($feet < 1){
         echo"<script>alert('Invalid height')</script>";
         return false;
     }else if($inch < 1){
        echo"<script>alert('Invalid height')</script>";
        return false;
     }else if($weight < 1){
        echo"<script>alert('Invalid weight')</script>";
        return false;
     }else{
           $meters = ($feet * 0.3048)+($inch * 0.0254);
           $n = $meters * $meters;
           $res = $weight / $n;
           $n = strpos($res,".");
           $res = substr($res,0,$n+3);
           $_SESSION['result'] = $res;
           
          ?>
          <script>
              location.replace("result.php");
          </script>
          <?php
     }
 }
 
 
 ?>
</body>
<!-- d(m) = d(ft) × 0.3048 + d(in) × 0.0254 -->
</html>