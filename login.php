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
            //read from db
            $query = "select * from `users` where user_name = '$user_name' limit 1";
            
            if ($result = mysqli_query($connection, $query)) {
                if($result){
                    $result = mysqli_query($connection, $query);
                    if($result && mysqli_num_rows($result) > 0)
                    {
                        $user_data = mysqli_fetch_assoc($result);
                        if ($user_data['password'] === $password){
                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: index.php");
                            die;

                        }
                    }
                }
                echo "Username or password invalid";
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