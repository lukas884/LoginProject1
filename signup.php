<?php
session_start();

    include("connection.php");
    include("functions.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to db
            $user_id = random_num(20);
            $query = "insert into `users` (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
            
            if (mysqli_query($connection, $query)) {
                header("Location: login.php");
                die;
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        
        }else
        {
            echo "Username or password invalid";
        }
    }

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