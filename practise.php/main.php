<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <label>Choose File</label>
        <input type="file" name="img" />
        <br>
        <input type="submit" name="btn" />
    </form>

    <?php  
        if(isset($_POST['btn'])){
            $imgname = $_FILES['img']['name'];
            $ex = pathinfo($imgname, PATHINFO_EXTENSION);
            echo $ex;
        }
    ?>
</body>
</html>