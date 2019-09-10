<?php

    session_start();
    require_once('db.php');

    if(!isset ($_POST['body'])) {
        exit;
    }

    $user_id = $_SESSION['user'];
    $query = "SELECT * FROM users WHERE user='$user_id'";
    $userData = $conn->query($query);
    
    if(isset($_POST['body'])){
        $body = $_POST['body'];
    }
    
    echo $body;
    $date = date('Y-m-d H:i:s');
    
    $query1 = ("INSERT INTO tweets VALUES ('$user_id', '$user_id', '$body', '$date')");
    $result = $conn->query($query1);
    header("Location: home.php");
    
    
    
?>