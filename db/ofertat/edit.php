<?php
include_once ('OfertatRepository.php');
class updateId extends DatabaseConnection{
    public function newOfertat(){
        $ofertatId = $_GET['id'];

    if (isset($_POST['editBtn'])) {
    $emri = $_POST['emri'];
    $cmimi = $_POST['cmimi'];
    $koha = $_POST['koha'];
    $lokacioni = $_POST['lokacioni'];
    $imgsrc = $_POST['imgsrc'];

    $query = "UPDATE travel SET Emri= :emri, Cmimi = :cmimi, Koha=:koha, Lokacioni = :lokacioni, Imgsrc = :imgsrc  WHERE Id= :id";
    $stmt = $this->startConnection()->prepare($query);
    $stmt->bindParam(":id", $ofertatId, PDO::PARAM_INT);
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
$updateId->newOfertat();





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
        <h3>EDIT OFERTA</h3>
        <input type="text" name="emri" placeholder="Emri.." > <br> <br>
        <input type="text" name="cmimi" placeholder="Cmimi.."> <br> <br>
        <input type="text" name="koha" placeholder="Koha.." > <br> <br>
        <input type="text" name="lokacioni" placeholder="Lokacioni.."> <br> <br>
        <input type="text" name="imgsrc" placeholder="ImageSource.."> <br> <br>

        <input type="submit" name="editBtn" value="SAVE"> <br> <br>
    </form>


</body>
</html>
