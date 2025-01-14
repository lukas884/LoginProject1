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
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
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

        #button:hover {
            opacity: 70%;
        }

        a {
            color: white; 
            text-decoration: none;
        }

        a:hover {
            opacity: 50%;
        }

    </style>

    <div id="header">
        <h1>Le Website</h1>
    </div>

    <div id="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px; color: white;">Login</div>
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php">Click To Sign Up</a>
        </form>
    </div>
    
</body>
</html>