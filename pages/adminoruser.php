<?php
  session_start();
  $hide="";
  if(!isset($_SESSION['email']))
    header("location:../Login/index5.php");
  else
    if($_SESSION['role'] == "admin")
      $hide = "";
    else
      $hide = "hide";
?>