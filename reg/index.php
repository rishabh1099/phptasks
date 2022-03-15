<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="enter name">
        <input type="text" name="email" placeholder="enter email">
        <input type="text" name="password" placeholder="enter passswrod">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "insert into register (name, email, password) Values ('$name', '$email', '$password')";
        $z = mysqli_query($con, $query);
        if(!$z){
            echo "not submitted";
        }else{
            echo " submitted";
        }
    }
    ?>
</body>
</html>