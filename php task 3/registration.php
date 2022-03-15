<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css" />
    <title>register</title>
</head>

<body>
    <div id="container">
        <h1>Register</h1><br>
        <form action="#" id="form" method="POST" onsubmit="return validate()">
            <label for="username">Username :</label><br>
            <input type="text" id="user" name="user"><span id="us"></span><br>
            <label for="email">Email :</label><br>
            <input type="text" id="email" name="email"><span id="em"></span><br>
            <label for="password">Password :</label><br>
            <input type="text" id="pass" name="pass"><span id="ps"></span><br>
            <label for="address">Address :</label><br>
            <input type="text" id="address" name="address"><span id="ad"></span><br>
            <label for="city">City :</label><br>
            <input type="text" id="city" name="city"><span id="ci"></span><br>
            <input type="submit" name="submit" value="Register" />
            <a href="login.php"><label>login</label></a>
        </form>
    </div>
    <script src="file.js"></script>
    <?php 
          if(isset($_POST['submit'])){
              $user = $_POST['user'];
              $email = $_POST['email'];
              $pass = $_POST['pass'];
              $address = $_POST['address'];
              $city = $_POST['city'];
    
            if(strlen($user) < 2){
                echo "<script>alert('Invalid name')</script>";
               return false;
            }elseif(strlen($email) < 2){
                echo "<script>alert('Invalid email')</script>";
                return false;
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<script>alert('Invalid email')</script>";
                return false;
            } elseif(strlen($pass) < 2){
                echo "<script>alert('Invalid password')</script>"; 
                return false;
            }elseif(strlen($address) < 2){
                echo "<script>alert('Invalid address')</script>";
                return false;
            }elseif(strlen($city) < 2){
                echo "<script>alert('Invalid city')</script>";
                return false;
            }else{
                $file = fopen("data.txt", 'a');
                $data = "data.txt";
                $content = file_get_contents($data);
                   $array = explode("\n", $content);
                    for($i=0; $i< count($array);){
                        if ((strpos($array[$i], $email) == true))
                        {
                            echo "<script>alert('Email already registered')</script>";
                            break;
                        }else{
                            $i++;
                          
                        }
                       
                    }
                    if($i == count($array)){
                            fwrite($file, "Username : $user \n");
                            fwrite($file, "Email : $email \n");
                            fwrite($file,"Password : $pass \n");
                            fwrite($file, "Address : $address \n");
                            fwrite($file, "City : $city \n");
                            fclose($file); 
                    }
                    
            }
          }
        ?>
</body>

</html>