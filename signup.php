<?php
session_start();

    include("connection.php");
    include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thick rebeccapurple;
            width: 100%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: rebeccapurple;
            border-radius: 5px;
        }

        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            align-items: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            color: white; 
            text-decoration: none;
        }

        a:hover {
            opacity: 50%;
        }

    </style>

    <div id="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px; color: white;">Sign Up</div>
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Sign Up"><br><br>

            <a href="login.php">Click To Log In</a>
        </form>
    </div>
    
</body>
</html>