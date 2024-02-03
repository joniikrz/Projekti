<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../addoredit.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <h3>ADD TRAVEL</h3>
        <input type="text" name="emri" placeholder="Emri..."> <br><br>
        <input type="text" name="cmimi" placeholder="Cmimi.."> <br><br>
        <input type="text" name="koha" placeholder="Koha..."> <br><br>
        <input type="text" name="lokacioni" placeholder="Lokacioni..."><br><br>
        <input type="text" name="imgsrc" placeholder="Imgsrc.."><br><br>

        <input type="submit" name="registerBtn" value="register"><br><br>
    </form>

   <?php include_once 'registerController.php';?>
</body>
</html>