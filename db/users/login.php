<?php 
include "UserRepository.php";
if(isset($_POST['loginbtn'])){
if(empty($_POST['email']) || empty($_POST['password'])){
  echo "<script> alert('Fill all the fields')</script>";
}else{
    $userRepository = new UserRepository();
    $users = $userRepository->getAllUsers();

    $email=$_POST['email'];
    $password=$_POST['password'];
    $i=0;
    foreach($users as $user){
      if($user['Email'] == $email && $user['Passi'] == $password){
        session_start();
        $role=$user['Role'];
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['role']=$role;
        header("location:../kodi/index2.php");
        exit();
        
      }
    }
    echo "<script> alert('Incorrect username or password')</script>";
}
}
?>