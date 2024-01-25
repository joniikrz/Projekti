<?php

$travelId = $_GET['id'];
include_once 'travelRepository.php';



$travelRepository = new TravelRepository();
$travelRepository->getTravelsbyId($travelId);


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
        <input type="text" name="id"  value="<?=$user['Id']?>" readonly> <br> <br>
        <input type="text" name="emri"  value="<?=$user['Emri']?>"> <br> <br>
        <input type="text" name="cmimi"  value="<?=$user['Koha']?>"> <br> <br>
        <input type="text" name="koha"  value="<?=$user['Cmimi']?>"> <br> <br>
        <input type="text" name="lokacioni"  value="<?=$user['Lokacioni']?>"> <br> <br>
        <input type="text" name="imgsrc"  value="<?=$user['Imgsrc']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['Id'];
    $emri = $_POST['Emri'];
    $cmimi = $_POST['Cmimi'];
    $koha = $_POST['Koha'];
    $lokacioni = $_POST['Lokacioni'];
    $imgsrc = $_POST['Imgsrc'];

    $userRepository->updateTravel($id,$emri,$cmimi,$koha,$lokacioni,$imgsrc);
    header("location:dashboard.php");
}


?>
