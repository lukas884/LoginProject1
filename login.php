<?php
session_start();

include("connection.php");
include("functions.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

    $error_message = '';

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
                $error_message = "Username or password invalid";
            } else {
                $error_message = "Error: " . mysqli_error($connection);
            }
        
        }else
        {
            $error_message = "Username or password invalid";
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
    <link rel="icon" href="meat_emoji.png">
</head>
<body>

    <div id="header">
        <h1>Raw.Meat</h1>
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

    <?php if ($error_message): ?>
    <div class="error__message" style="color: red;">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>
    
</body>
</html>