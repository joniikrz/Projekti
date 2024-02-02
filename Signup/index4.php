<?php

include_once '../db/users/registerController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="index4.css">
</head>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="registerForm">
    <div class="wrapper">
        <div class="log-box">
            <img src="../assets/logoo.png" alt="lo">
            <h3>SIGN UP</h3>
            <div class="user">
            <div>
                <input type="text" id="emri" placeholder="Emri">
            </div>
            <div id="emriError"></div>
            </div>
            <div class="user">
            <div>
            <input type="text"id="mbiemri" placeholder="Mbiemri">
            </div>
             <div id="mbiemriError"></div>
             </div>
             <div class="user">
            <input type="date">
             </div>
             <div class="user">
            <div >
            <input type="text" id="email" placeholder="Email">
            </div> 
            <div id="emailError"></div>
             </div>
             <div class="user">
            <div>
            <input type="password" id="password" placeholder="Password">
            </div>
            <div id="passwordError"></div>
            <a href="../Login/index5.php" class="have-acc">You already have an account?Log in!</a>
             </div>
           
             <button name="registerBtn" type="submit">SIGN UP</button>
        </div>
    </div>
    </form>
    <script src="index4.js"></script>
</body>
</html>