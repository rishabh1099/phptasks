<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>task4</title>
    <style>
       #container {
           width: 300px;
           display: flex;
           margin: auto;
           align-items: center;
           height: auto;
           margin-top: 200px;
       }
       #container2{
           width: 300px;
           display: flex;
           margin: auto;
           align-items: center;
           height: auto;
       }
       select{
           width: 100%;
           height: 40px;
           font-size: 18px;
           border: 0px;
            background: none;
           border-bottom: 4px solid red;
           color: blue
       }
       body{
           background-color:#e6e6e6;
       }
    </style>
</head>

<body>

    <div id="container"></div><br>
    <div id="container2">
        <select id="sp2">
            <option default>choose city</option>
        </select>
    </div>


    <script src="file.js"> </script>
</body>

</html>