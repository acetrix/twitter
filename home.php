<?php

    session_start();
    require_once('db.php');
    if(!isset($_SESSION['user'])) {
        header("Location: login.php");
    }

    $user_id = $_SESSION['user'];
    $query = "SELECT * FROM users WHERE user='$user_id'";
    $userData = $conn->query($query);
    $post = $_POST['body'];

    if(isset($post) && $post != ''){
        $post = $_POST['body'];
        $date = date('Y-m-d H:i:s');
    
        $query1 = ("INSERT INTO tweets VALUES ('$user_id', '$user_id', '$post', '$date')");
        $result = $conn->query($query1);
    }
   
    
    
   #header("Location: wall.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include('header.php'); ?>
    <form method="post" action="home.php">
    <fieldset>
        <label for="tweet">What's happening?</label><br>
        <textarea name="body" cols="50" rows="4"></textarea><br>
        <input type="submit" value="Tweet"/>

    </fieldset>
    </form>
</body>
</html>