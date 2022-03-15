<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(strlen($name)< 3){ 
        echo "<script>error('#sp2', 'Invalid Name')</script>";
        return false;
    }else if (!preg_match("/^([a-zA-Z' ]+)$/",$name)) {
        echo "<script>error('#sp2', 'Invalid Name')</script>";
        return false;
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>error('#sp3', 'Invalid Email')</script>";
        return false;
    } else if(strlen($pass) < 2){
        echo "<script>error('#sp5', 'Invalid Password')</script>"; 
        return false;
    }else if(strlen($cpass) < 2){
        echo "<script>error('#sp6', 'Invalid Confirm Password')</script>"; 
        return false;
    }else if($pass !== $cpass){
        echo "<script>error('#sp6', 'Password is not matching')</script>"; 
        return false;
    }else{
        $query1 = "select * from registration where email = '$email'";
        $get = mysqli_query($con, $query1);
        $fetch = mysqli_num_rows($get);
        if($fetch > 0){
            echo "<script>error('#sp3', 'Email already registered')</script>"; 
            
        }else{
            $query2 = "insert into registration (name, number, email, password) values('$name', '$phone', '$email', '$pass')";
            $insert = mysqli_query($con, $query2);
            if($insert== true){
                echo "<script>status('#status', 'Submitted')</script>"; 
            }else{
                echo "<script>status('#status', 'Not Submitted')</script>"; 
              
            }
        }
    }
}
?>
