<?php
include_once 'OfertatRepository.php';
include_once 'Ofertat.php';

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

        $oferta  = new Ofertat($id,$emri,$cmimi,$koha,$lokacioni,$imgsrc);
        $ofertatRepository = new OfertatRepository();

        $ofertatRepository->insertOferta($oferta);


    }
}