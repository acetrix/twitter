<div>
    <span>
    
        Welcome, <?php echo $_SESSION['user']; ?>!</span><br>
        [<a href="home.php">Home</a>]
        [<a href="wall.php">Wall</a>]
        [<a href="profile.php?id=<?php echo $_SESSION['user']; ?>">View Profile</a>]
        [<a href="userList.php">View Users List</a>]
        [<a href="logout.php">Log out</a>]
   
</div>

