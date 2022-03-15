<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>
    <form method="POST" >
        <label>Email :</label>
        <input type="text" name="email" />
        <label>Password :</label>
        <input type="text" name="password" /><br><br>
        <input type="submit" name="submit" value="submit"/>
    </form>


    <?php
    if(isset($_POST['submit'])){
        $obj = new validate;
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $emailRegex = '/^[A-Z]+@[A-Z0-9-]+\.[A-Z0-9-.]+$/';
        if( preg_match($emailRegex, $email)==TRUE || $email == ""){
            if($email =="" && $pass ==""){
               $a =  $obj->checkValid();
               echo $a;
             }else if($email !=="" && $pass == ""){
               $b =  $obj->checkValid($email);
               echo "your Email :".$b;
            }else if($pass !=="" && $email == ""){
               $c =  $obj->checkValid($pass);
                echo "your Password :".$c;
            }else{
               $d =  $obj->checkValid($email,$pass);
               echo $d;
            }
           
        }else{
            echo "<script>alert('write email in capital letter')</script>";
            return false;
        }
    }

     class validate{
            
            function __call($fun1, $arg){
              if($fun1 == 'checkValid'){
                  switch(count($arg)){
                    case 0 : return "Welcome Guest" ;
                   
                    case 1: return "$arg[0]";
                    case 2 : return "Welcome Email $arg[0] your password is $arg[1]";
                  }
              }
            }
    }
    



    ?>
</body>
</html>
<!-- $emailRegex = '/^[A-Z]+@[A-Z0-9-]+\.[A-Z0-9-.]+$/'; -->