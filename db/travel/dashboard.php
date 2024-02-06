<?php
include("../dashboardsession.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel List</title>
    <link rel="stylesheet" href="../dashboard.css">
</head>

<body>
    <div class="container">
        <div class="list">
            <?php
            include('C:\xampp\htdocs\Projekti\Projekti\db\travel\TravelRepository.php');
            $travelRepository = new TravelRepository();
            $travels = $travelRepository->getAllTravels();

            foreach ($travels as $travel) {
                echo "
                <div class='card'>
                    <div class='details'>
                        <p>ID: $travel[Id]</p>
                        <p>Emri: $travel[Emri]</p>
                        <p>Cmimi: $travel[Cmimi]</p>
                        <p>Koha: $travel[Koha]</p>
                        <p>Lokacioni: $travel[Lokacioni]</p>
                        <p>Image source: $travel[Imgsrc]</p>
                        <a href='edit.php?id=$travel[Id]'>Edit</a>
                        <a href='delete.php?id=$travel[Id]'>Delete</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
    <div class="butonat">
        <button><a href="register.php">ADD</a></button>
        <button><a href="../users/dashboard.php">User Dashboard</a></button>
        <button><a href="../ofertat/dashboard.php">Ofertat Dashboard</a></button>
    </div>

</body>

</html>