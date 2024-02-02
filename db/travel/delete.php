<?php

$travelId = $_GET['id'];
include_once 'TravelRepository.php';



$travelRepository = new TravelRepository();

$travelRepository->deleteTravel($travelId);

header("location:dashboard.php");


?>