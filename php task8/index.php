<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <title>Registration</title>
</head>
<body>
    <div id="container">
        <div id="registration">
            <form action="#" method="POST" id="form" onsubmit="return myfun()"><br>
                <h1>Registration </h1><br>
                <label>Name :</label>
                <input type="text" name="name" id="name" >
                <p id="sp2"></p>
                <label>Email :</label>
                <input type="text" name="email" id="email" >
                <p id="sp3"></p>
                <label>Mobile :</label>
                <input type="number" name="number" id="number" >
                <p id="sp4"></p>
                <label>Password :</label>
                <input type="password" name="pass" id="pass" >
                <p id="sp5"></p>
                <label>Confirm Password :</label>
                <input type="password" name="cpass" id="cpass" >
                <p id="sp6"></p>
                <br>
                <button type="submit" name="submit" id="btn">Register</button>
                <label id="login"><a href="login.php">login</a></label><br>
                <label id="status"></label>
                <br>
            </form>
        </div> 
    </div>
    <script>
        function myfun(){
               $("p").css("visibility","hidden");
                var name = $("#name").val();
                var email = $("#email").val();
                var number = $("#number").val();
                var pass = $("#pass").val();
                var cpass = $("#cpass").val();
                var reg = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var name1 = /^[^\d]+$/;
                if(name.length < 3){
                    $("#sp2").css("visibility","visible");
                    $("#sp2").html("**Invalid Name");
                    return false;
                }else if (reg.test(name) == true) {
                    $("#sp2").css("visibility","visible");
                    $("#sp2").html("**Invalid Name");
                    return false;
                }else if (name1.test(name) == false) {
                    $("#sp2").css("visibility","visible");
                    $("#sp2").html("**Invalid Name");
                    return false;
                }else if (mail.test(email)==false) {
                    $("#sp3").css("visibility","visible");
                    $("#sp3").html("**Invalid Email");
                    return false;
                }else if (number.length !== 10) {
                    $("#sp4").css("visibility","visible");
                    $("#sp4").html("**Invalid Number");
                    return false;
                }else if (pass.length < 4) {
                    $("#sp5").css("visibility","visible");
                    $("#sp5").html("**Invalid Password");
                    return false;
                }else if (cpass.length < 4) {
                    $("#sp6").css("visibility","visible");
                    $("#sp6").html("**Invalid Password");
                    return false;
                }else if(pass !== cpass){
                    $("#sp6").css("visibility","visible");
                    $("#sp6").html("**Confirm Password is not matching");
                    return false;
                }
                else{
                    return true;
                }
        }

        function error(n, letter){
            $(n).css("visibility", "visible");
            $(n).html(letter);
            return false;
        }

        function status(tag, text){
            $(tag).css("display", "block");
            $(tag).html(text);
        }

        $("input").click(function(){
            $("p").css("visibility","hidden");
        })
        $("input").click(function(){
            $("#status").css("display","none");
        })
    </script>

    <?php 
      include 'register.php';
    ?>
</body>
</html>