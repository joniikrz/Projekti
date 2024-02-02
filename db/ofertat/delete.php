<?php

$ofertaId = $_GET['id'];
include_once 'OfertatRepository.php';



$ofertatRepository = new OfertatRepository();

$ofertatRepository->deleteOferta($ofertaId);

header("location:dashboard.php");


?>
