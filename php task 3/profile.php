<?php
session_start();
if(!$_SESSION['username']){
    header('location: login.php');
  
}
$letter = $_SESSION['username'];
$_SESSION['n'] = substr($letter, 8);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <style>
        *{
            margin:0px;
            padding: 0px;
        }
        #container{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        #nav{
            margin-top: 10px;
            background-color: #333333;
            height: 60px;
            color: white;
        }
        h4{
            line-height: 58px;
            margin-left: 50px;
            font-size: 30px;
        }
        #details{
            width: 50%;
            height: 100%;
            background: silver;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
        }
        h1:first-child{
            color: blue;
        }
    </style>
</head>
<body>
   <div id="container">
        <div id="nav">
            <h4>Welcome <?php echo $_SESSION['n']; ?></h4>
        </div><br>
        <div id="details">
            <h1>User Details</h1><br>
            <h1><?php echo $_SESSION['username']; ?></h1><br>
            <h1><?php echo $_SESSION['email']; ?></h1><br>
            <h1><?php echo $_SESSION['password']; ?></h1><br>
            <h1><?php echo $_SESSION['address']; ?></h1><br>
            <h1><?php echo $_SESSION['city']; ?></h1><br>
            <?php session_destroy(); ?>
        </div>
   </div>
</body>
</html>
