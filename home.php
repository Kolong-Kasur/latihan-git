<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        h1 {
            text-align: center;
            color: lightseagreen;
        }
        h1, p{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <h1>
        <?php 
        require("./app.php");
        echo $header;
        ?>
    </h1>
    <p>
        <?php
        require("./app.php");
        echo $par;
        ?>
    </p>
</body>
</html>