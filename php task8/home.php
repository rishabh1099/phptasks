<?php 
session_start();
if($_SESSION['name']== false){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #nav{
            width: 100%;
            display: flex;
            height: 50px;
            background-color: #4d4dff;
        }
        #nav>h2{
            margin-right: auto;
            margin-right: 50px;
            line-height: 20px;
            color: white;
        }
        #cont{
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
        }
        
    </style>
</head>
<body>
     <div id="nav">
        <h2>Welcome : <?php echo $_SESSION['name']; ?></h2>
     </div><br>
     <div id="cont">
            <h1>Email - <?php echo $_SESSION['email']; ?></h1>
     </div>
     <?php session_destroy() ?>
</body>
</html>