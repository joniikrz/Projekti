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
    <link rel="stylesheet" href="../addoredit.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h3>EDIT USER </h3>
        <input type="text" name="emri" placeholder="Emri.." > <br> <br>
        <input type="text" name="mbiemri" placeholder="Mbiemri.."> <br> <br>
        <input type="text" name="diteLindja" placeholder="Ditelindja.." > <br> <br>
        <input type="text" name="email" placeholder="Email.."> <br> <br>
        <input type="text" name="password" placeholder="Password.."> <br> <br>

        <input type="submit" name="editBtn" value="SAVE"> <br> <br>
    </form>


</body>
</html>



