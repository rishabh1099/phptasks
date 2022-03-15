<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       echo "<script>alert('email is wrong')</script>";
       return false;
    }else if (strlen($pass) < 4) {
        echo "<script>alert('password is wrong')</script>";
       return false;
    }else{
        $select = "select * from registration where email = '$email'";
        $selectQuery = mysqli_query($con, $select);
        if(mysqli_num_rows($selectQuery) > 0){
            $fetch = mysqli_fetch_assoc($selectQuery);
            if($fetch['password'] == $pass){
                $_SESSION['name'] = $fetch['name'];
                $_SESSION['email'] = $fetch['email'];
                header('location: home.php');
            }else{
                echo "<script>error('#e2','password is wrong')</script>";
                return false;
            }
        }else{
            echo "<script>error('#e1','email not registered')</script>";
            return false;
        }
    }
}
?>
