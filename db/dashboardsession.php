<?php
session_start();
if($_SESSION['role']!=="admin"){
    header("../../pages/index2.php");
    exit();
}
?>