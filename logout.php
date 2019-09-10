<?php

    session_start();

    
    $_SESSION= array();
    if(isset($_SESSION['user'])) {
        
        destroySession();
        
        echo "<div class='main'>You have been logged out. Please " .
        "<a href='index.php'>click here</a> to refresh the screen.";

        
    }
    else echo "<div class='main'><br>" .
    "You have been logged out <br>" .
    "<a href='login.php'>click here</a> to refresh the screen.";
  
?>