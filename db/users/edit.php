<?php

$userId = $_GET['id'];
include_once 'userRepository.php';



$userRepository = new UserRepository();
$userRepository->getUsersbyId($userId);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$user['Id_User']?>" readonly> <br> <br>
        <input type="text" name="emri"  value="<?=$user['Emri']?>"> <br> <br>
        <input type="text" name="mbiemri"  value="<?=$user['Mbiemri']?>"> <br> <br>
        <input type="text" name="diteLindja"  value="<?=$user['Ditelindja']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['Email']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['Passi']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['Id_User'];
    $emri = $_POST['Emri'];
    $surname = $_POST['Mbiemri'];
    $diteLindja = $_POST['Ditelindja'];
    $email = $_POST['Email'];
    $password = $_POST['Passi'];

    $userRepository->updateUser($id,$emri,$mbiemri,$diteLindja,$email,$password);
    header("location:dashboard.php");
}


?>