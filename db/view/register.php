<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="emri" placeholder="Emri..."> <br><br>
        <input type="text" name="mbiemri" placeholder="Mbiemri.."> <br><br>
        <input type="text" name="diteLindja" placeholder="Ditelindja..."> <br><br>
        <input type="text" name="email" placeholder="Email..."><br><br>
        <input type="text" name="password" placeholder="Password..."><br><br>

        <input type="submit" name="registerBtn" value="register"><br><br>
    </form>

   <?php include_once '../registerController.php';?>
</body>
</html>