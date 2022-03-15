<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="#" id="form" method="POST">
                <label for="username">Username :</label><br>
                <input type="text" id="user" name="user"><span id="us"></span><br>
                <label for="email">Email :</label><br>
                <input type="text" id="email" name="email"><span id="em"></span><br>
                <input type="submit" name="submit" value="Register" />
              
            </form>
            <?php  
               if(isset($_POST['submit'])){
                   $user = $_POST['user'];
                   $email = $_POST['email'];
                   $array = array("username"=>$user, "email"=>$email);
                   $fp = fopen('data.txt', 'a');
                   fwrite($fp, print_r($array, TRUE));
                   fclose($fp);  
                   header("Location: new.php");
               }
            ?>

</body>
</html>