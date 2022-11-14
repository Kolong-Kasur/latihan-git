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
    <table>
        <legend>This is my table</legend>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        <tr>
            <td><?php require("./app.php"); echo $user1_id?></td>
            <td><?php require("./app.php"); echo $user1_name?></td>
            <td><?php require("./app.php"); echo $user1_email?></td>
        </tr>
        <tr>
            <td><?php require("./app.php"); echo $user2_id ?></td>
            <td><?php require("./app.php"); echo $user2_name ?></td>
            <td><?php require("./app.php"); echo $user2_email ?></td>
        </tr>
    </table>
</body>
</html>