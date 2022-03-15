<?php 
session_start();

if(!$_SESSION['result'])
     echo "<script>location.replace('index.php')</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Document</title>
    <style>
     #main{
         width: 40%;
         height : 300px;
         display : flex;
         margin: auto;
         background-color: #ff3333;
         align-items : center;
         flex-direction : column;
     }
     h1{
         color: white;
     }
    </style>
</head>
<body>
    <div id="main">
        <h1>Your Body Mass Index Is :</h1>
        <label><h1><?php echo $_SESSION['result']." kg/meter sq "; ?></h1></label>
    </div>
    <?php session_destroy(); ?>
</body>
</html>