<?php

    $db_hostname = 'localhost';
    $db_database = 'twitter';
    $db_username = 'virtual';
    $db_password = 'virtual2020';

    $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);
    

    if($conn->connect_error) {
        echo "failed";
        die($conn->connect_error);
    }
?>

