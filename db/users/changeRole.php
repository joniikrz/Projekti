<?php

$Id = $_GET['id'];
include_once 'userRepository.php';

$userRepository = new UserRepository();

$userRepository->changeRole($Id);

header("location:dashboard.php");

exit();
?>