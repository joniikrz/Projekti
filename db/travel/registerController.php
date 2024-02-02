<?php
include_once 'TravelRepository.php';
include_once 'Travel.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['emri']) || empty($_POST['cmimi']) || empty($_POST['koha']) ||
    empty($_POST['lokacioni']) || empty($_POST['imgsrc'])){
        echo "Fill all fields!";
    }else{
        $emri = $_POST['emri'];
        $cmimi = $_POST['cmimi'];
        $koha = $_POST['koha'];
        $lokacioni = $_POST['lokacioni'];
        $imgsrc = $_POST['imgsrc'];
        $id = rand(100,999);

        $travel  = new Travel($id,$emri,$cmimi,$koha,$lokacioni,$imgsrc);
        $travelRepository = new TravelRepository();

        $travelRepository->insertTravel($travel);


    }
}



?>