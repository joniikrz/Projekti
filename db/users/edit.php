<?php
include_once ('UserRepository.php');
class updateId extends DatabaseConnection{
    public function newUSER(){
        $userId = $_GET['id'];

   if (isset($_POST['editBtn'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $diteLindja = $_POST['diteLindja'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role=$_POST['roli'];

    $query = "UPDATE users SET Emri= :emri, Mbiemri = :mbiemri, Ditelindja=:diteLindja, Email = :email, Passi= :password ,Role=:role WHERE Id_User= :id";
    $stmt = $this->startConnection()->prepare($query);
    $stmt->bindParam(":id", $userId, PDO::PARAM_INT);
    $stmt->bindParam(":emri", $emri, PDO::PARAM_STR);
    $stmt->bindParam(":mbiemri", $mbiemri, PDO::PARAM_STR);
    $stmt->bindParam(":diteLindja", $diteLindja, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);
    $stmt->bindParam(":role", $role, PDO::PARAM_STR);

    try {
        $stmt->execute();
        header("Location: dashboard.php ");
    } catch (PDOException $e) {
        echo "Problem: " . $e->getMessage();
    }
    exit();
}
    }
}
$updateId = new updateId();
$updateId->newUSER();



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
        <input type="text" name="emri" > <br> <br>
        <input type="text" name="mbiemri"> <br> <br>
        <input type="text" name="diteLindja" > <br> <br>
        <input type="text" name="email"> <br> <br>
        <input type="text" name="password"> <br> <br>
        <input type="text" name="roli"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>



