<?php

    session_start();
    require_once 'header.php';
    require_once('db.php');

    if(!isset($_SESSION['user'])) {
        header('Location:login.php');
    }

    $id = $_SESSION['user'];
    $query = "SELECT * FROM tweets WHERE authorId='$id'";
    $result = $conn->query($query);
    while($row = mysqli_fetch_assoc($result)) {
   
        echo '<p>' .$row['authorId'] . '</p>';
        echo '<p>' .$row['body'] . '</p>';
        echo '<p>' .$row['created'] . '</p>';

    }

?>