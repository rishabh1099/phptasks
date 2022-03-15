<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="login.css" />
    <title>login</title>
</head>
<body>
<div id="container">
        <div id="login">
            <form method="POST" id="form" onsubmit="return myfun()"><br>
                <h1>Login </h1><br>
                <label>Email :</label>
                <input type="text" name="email" id="email" >
                <p id="e1"></p>
                <label>Password :</label>
                <input type="text" name="pass" id="pass" ><p id="e2"></p><br>
                <button type="submit" name="submit" id="btn" >Login</button>
                <span id="re"><a href="index.php">register</a></span>
                <br><br>
            </form>
        </div> 
    </div>
    <script>
        function myfun(){
                $("p").css("visibility", "hidden");
                var email = $("#email").val();
                var pass = $("#pass").val();
                var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(mail.test(email)==false){
                    $("#e1").css("visibility", "visible");
                    $("#e1").html("email is not valid");
                    return false;
                }else if(pass.length < 4){
                    $("#e2").css("visibility", "visible");
                    $("#e2").html("Invalid Password");
                    return false;
                }else{
                    return true;
                }
        }
// ---------------------------------------------------------------------------------------
        function error(n,letter){
            $(n).css("visibility", "visible");
            $(n).html(letter);
            return false;
        }

        $("input").click(function(){
            $("p").css("visibility", "hidden");
        })
    </script>
    <?php 
    include 'logged.php';
    ?>
</body>
</html>