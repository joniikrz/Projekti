<?php
include 'adminoruser.php';
include('C:\xampp\htdocs\Projekti\Projekti\db\ofertat\OfertatRepository.php');

$ofertatRepository = new OfertatRepository();

$ofertat = $ofertatRepository->getAllOfertat();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFERTAT</title>
    <link rel="stylesheet" href="index6.css">
</head>
<body>
    <div class="banner">
    <div class="nav">
        <img src="../assets/logoo.png" alt="" class="logo">
        <ul>
        <li><a href="../db/users/dashboard.php" class="<?php echo $hide?>">DASHBOARD</a></li>
         <li><a href="index2.php">HOME</a></li>
           <li><a href="index1.php">TRAVEL</a></li>
           <li><a href="index6.php">OFERTAT</a></li>
           <li><a href="index3.php">ABOUT US</a></li>
          <li><a href="../Logout/logout.php">LOG OUT</a></li>
        </ul>
    </div>
    </div>
    <p class="ttll">OFERTAT</p>
    <section class="vendet">
        <?php foreach($ofertat as $oferta):?>
        <div class="shtetet">
                    <div class="fotoja">
                        <img src=<?php echo $oferta["Imgsrc"]?> alt="Error">
                    </div>
                <div class=text>
                    <h2 class="s"><?php echo $oferta["Emri"]?></h2>
                    <p class="cmimi"><?php echo $oferta["Cmimi"]?></p>
                    <div class="info_box">
                        <p class="koha"><?php echo $oferta["Koha"]?></p>
                        <p class="lokacioni"><?php echo $oferta["Lokacioni"]?></p>
                    </div>
                </div>
        </div>
        <?php endforeach;?>
    </section>
  <footer>
    <div class="footer">
        <h3>Copyrights &copy; 2023 | All rights reserved for <a href="#">JQ Travel - Prishtine</a></h3>
    </div>
  </footer>
      
  </body>
  </html>  