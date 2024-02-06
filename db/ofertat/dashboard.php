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
            include('C:\xampp\htdocs\Projekti\Projekti\db\ofertat\OfertatRepository.php');
            $ofertatRepository = new OfertatRepository();
            $ofertat = $ofertatRepository->getAllOfertat();

            foreach ($ofertat as $oferta) {
                echo "
                <div class='card'>
                    <div class='details'>
                        <p>ID: $oferta[Id]</p>
                        <p>Emri: $oferta[Emri]</p>
                        <p>Cmimi: $oferta[Cmimi]</p>
                        <p>Koha: $oferta[Koha]</p>
                        <p>Lokacioni: $oferta[Lokacioni]</p>
                        <p>Image source: $oferta[Imgsrc]</p>
                        <a href='edit.php?id=$oferta[Id]'>Edit</a>
                        <a href='delete.php?id=$oferta[Id]'>Delete</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
    <div class="butonat">
        <button><a href="register.php">ADD</a></button>
        <button><a href="../users/dashboard.php">User Dashboard</a></button>
        <button><a href="../travel/dashboard.php">Travel Dashboard</a></button>
    </div>

</body>

</html>