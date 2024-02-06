<?php
include 'adminoruser.php';
include('C:\xampp\htdocs\Projekti\Projekti\db\travel\TravelRepository.php');

$travelRepository = new TravelRepository();

$travels = $travelRepository->getAllTravels();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL</title>
    <link rel="stylesheet" href="index1.css">
</head>

<body>
    <div class="banner">
        <div class="nav">
            <img src="../assets/logoo.png" alt="" class="logo">
            <ul>
                <li><a href="../db/users/dashboard.php" class="<?php echo $hide ?>">DASHBOARD</a></li>
                <li><a href="index2.php">HOME</a></li>
                <li><a href="index1.php">TRAVEL</a></li>
                <li><a href="index6.php">OFERTAT</a></li>
                <li><a href="index3.php">ABOUT US</a></li>
                <li><a href="../Logout/logout.php">LOG OUT</a></li>

            </ul>
        </div>
    </div>

    <p class="ttll">FLIGHTS - 12/23</p>
    <section class="vendet">
        <?php foreach ($travels as $travel): ?>
            <div class="shtetet">
                <div class="fotoja">
                    <img src=<?php echo $travel["Imgsrc"] ?> alt="Error">
                </div>
                <div class="text">
                    <span class="vlersimi s">⭐⭐⭐⭐⭐</span>
                    <h2 class="s">
                        <?php echo $travel["Emri"] ?>
                    </h2>
                    <p class="cmimi "><?php echo $travel["Cmimi"] ?></p>
                    <div class="info_box ">
                        <p class=44444444444444"koha"><?php echo $travel["Koha"] ?> </p>
                        <p class="lokacioni">-<?php echo $travel["Lokacioni"] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </section>
    <footer>
        <div class="footer">
            <h3>Copyrights &copy; 2023 | All rights reserved for <a href="#">JQ Travel - Prishtine</h3>
        </div>
    </footer>


</body>

</html>