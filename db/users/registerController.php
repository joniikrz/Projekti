<?php
include_once 'UserRepository.php';
include_once 'User.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) ||
    empty($_POST['diteLindja']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $diteLindja = $_POST['diteLindja'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $email.rand(100,999);

        $user  = new User($id,$emri,$mbiemri,$diteLindja,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}



?>