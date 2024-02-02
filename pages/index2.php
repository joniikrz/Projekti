<?php
    include 'adminoruser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JQ Travel Agency</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="../assets/video-1.mp4" type="video/mp4">
        </video>
        <div class="nav">
        <img src="../assets/logoo.png" alt="" class="logo">
        <ul>
            <li><a href="../db/users/dashboard.php" class="<?php echo $hide?>">DASHBOARD</a></li>
            <li><a href="index2.php">HOME</a></li>
            <li><a href="index1.php">TRAVEL</a></li>
            <li><a href="index6.php">OFERTAT</a></li>
            <li><a href="index3.php">ABOUT US</a></li>
            <li><a href="../Logout/logout.php">LOG OUT</a></li>
        </ul>
    </div>
    </div>
    <div class="content">
        <h1>EXPLORE THE WORLD </h1>
        <button id="travel1" onclick="popup1()">Explore</button>
    </div>
    <script src="index2.js"></script>
</body>
</html>