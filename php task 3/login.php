<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>Login</title>
</head>

<body>
    <div id="container">
        <h1>Login</h1><br>
        <form id="form"  method="POST" onsubmit="return myfun()">

            <label for="email">Email :</label><br>
            <input type="text" id="email" name="email"><span id="emm"></span><br>
            <label for="password">Password :</label><br>
            <input type="password" id="pass" name="pass"><span id="paa"></span><br>

            <input type="submit" name="logged" value="Login"><br>
            <a href="registration.php">register</a>
        </form>
    </div>
<script src="filee.js"></script>
    <?php 
     
            if(isset($_POST['logged'])){
                $email = $_POST['email'];
                $password = $_POST['pass'];
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                   echo "<script>alert('Invalid Email')</script>";
                   return false;
                   }else{
                    $i = null;   
                   $file = "data.txt";
                   $content = file_get_contents($file);
                   $array = explode("\n", $content);
                    for($i=0; $i< count($array);){
                        if ((strpos($array[$i], $email) == true))
                        {
                            $pass =  $array[$i+1];
                             $final = trim(preg_replace('/\s\s+/', ' ', $pass));
                             $password = "Password : ".$password;
                            if($final == $password){
                               
                                $_SESSION['username'] = $array[$i-1];
                                $_SESSION['email'] = $array[$i];
                                $_SESSION['password'] = $array[$i+2];
                                $_SESSION['address'] = $array[$i+3];     
                                $_SESSION['city'] = $array[$i+4];
                                ?>
                                <script>location.replace('profile.php');</script>
                                <?php
                            }else{
                                echo "<script>alert('password incorrect');</script>";
                                return false;
                            }
                            break;
                        }else{
                            $i++;
                        }
                       
                    }
                    if($i == count($array)){
                        echo "<script>alert('email not registered');</script>";
                        return false;
                    }
                    
               }
            }
        ?>
</body>

</html>