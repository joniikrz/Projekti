<?php
 include '../db/users/login.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOG IN</title>
    <link rel="stylesheet" href="index5.css" />
  </head>
  <body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
    <div class="wrapper">
      <div class="log-box">
        <div>
          <img src="../assets/logoo.png" alt="lo" />
          <h3>LOG IN</h3>
        </div>
        <div class="user">
          <input type="text" id="email" placeholder="Email" name="email"/>
        </div>
        <div id="emailError"></div>
        <div class="user">
          <input type="password" id="password" name="password" placeholder="Password" />
        </div>
        <div id="passwordError"></div>
        <a class="dh-acc" href="../Signup/index4.php" id="signup" >You dont have an account?Sign up!</a>
      </div>
      <button name="loginbtn" onclick="validate()">LOG IN</button>
    </div>
  </form>
    <script src="index5.js"></script>
  </body>
</html>