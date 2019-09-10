<?php

    session_start();
    require_once 'header.php';
    require_once 'db.php';

    $query = "SELECT * FROM tweets ORDER BY created DESC";
    $result = $conn->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>' .$row['authorId'] . '</p>';
        echo '<p>' .$row['body'] . '</p>';
        echo '<p>' .$row['created'] . '</p>';
    }



?>