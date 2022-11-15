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

        #user {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #user td, #user th {
            border: 1px solid #ddd;
            padding: 10px;
        }

        #user tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #user tr:hover {
            background-color: #ddd;
        }

        #user th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

    </style>
</head>
<body>
    <h1>
        <?php 
        require_once("./app.php");
        echo $header;
        ?>
    </h1>
    <table id="user">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone_number</th>
        </tr>
        <tr>
            <td><?php echo $user1->get_id(); ?></td>
            <td><?php echo $user1->get_name(); ?></td>
            <td><?php echo $user1->get_email(); ?></td>
            <td><?php echo $user1->get_phone_number(); ?></td>
        </tr>
        <tr>
            <td><?php echo $user2->get_id(); ?></td>
            <td><?php echo $user2->get_name(); ?></td>
            <td><?php echo $user2->get_email(); ?></td>
            <td><?php echo $user2->get_phone_number(); ?></td>
        </tr>
        <tr>
            <td><?php echo $user3->get_id(); ?></td>
            <td><?php echo $user3->get_name(); ?></td>
            <td><?php echo $user3->get_email(); ?></td>
            <td><?php echo $user3->get_phone_number(); ?></td>
        </tr>
    </table>
</body>
</html>