<?php

    require_once 'db.php';

    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: home.php');
    }

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = ("SELECT username, password FROM users WHERE username = '$username' AND password = '$password'");
        $result = $conn->query($query);

        
        if($result->num_rows == 0) {
            echo 'Error! Invalid Username/Password. Please try again!';
           # header('Location: login.php');
        }else{
            $_SESSION['user'] = $username;
            $_SESSION['password'] = $password;
            header('Location: home.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter</title>
</head>
<body>
    <form method="post" action="login.php">
    <fieldset>
        <label for="username">Username: </label> <input type="text" name="username" /><br>
        <label for="password">Password: </label> <input type="password" name="password" /> <br>
        <input type="submit" value="login">
    </fieldset>
    </form>
    <a href="register.php">No account? Register here.</a>
</body>
</html>