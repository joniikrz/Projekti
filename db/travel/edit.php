<?php
include_once ('TravelRepository.php');
class updateId extends DatabaseConnection{
    public function newUSER(){
        $travelId = $_GET['id'];

   if (isset($_POST['editBtn'])) {
    $emri = $_POST['emri'];
    $cmimi = $_POST['cmimi'];
    $koha = $_POST['koha'];
    $lokacioni = $_POST['lokacioni'];
    $imgsrc = $_POST['imgsrc'];

    $query = "UPDATE travel SET Emri= :emri, Cmimi = :cmimi, Koha=:koha, Lokacioni = :lokacioni, Imgsrc = :imgsrc  WHERE Id= :id";
    $stmt = $this->startConnection()->prepare($query);
    $stmt->bindParam(":id", $travelId, PDO::PARAM_INT);
    $stmt->bindParam(":emri", $emri, PDO::PARAM_STR);
    $stmt->bindParam(":cmimi", $cmimi, PDO::PARAM_STR);
    $stmt->bindParam(":koha", $koha, PDO::PARAM_STR);
    $stmt->bindParam(":lokacioni", $lokacioni, PDO::PARAM_STR);
    $stmt->bindParam(":imgsrc", $imgsrc, PDO::PARAM_STR);

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
$updateId->newTravel();





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
        <input type="text" name="cmimi"> <br> <br>
        <input type="text" name="koha" > <br> <br>
        <input type="text" name="lokacioni"> <br> <br>
        <input type="text" name="imgsrc"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>



