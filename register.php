<?php

    session_start();
    require_once 'db.php';

    
    if(isset($_SESSION['user'])) {
        header('Location: home.php');
    }

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = ("INSERT INTO users VALUES ('$username', '$password')");
        $result = $conn->query($query);
        echo $result;
        header('Location: login.php');
        
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
    <form method="post" action="register.php">
    <fieldset>
        <label for="username">Username: </label> <input type="text" name="username" /><br>
        <label for="password">Password: </label> <input type="password" name="password" /> <br>
        <input type="submit" value="Sign Up">
    </fieldset>
    </form>
    <a href="login.php">Already have an account? Login here.</a>
</body>
</html> 