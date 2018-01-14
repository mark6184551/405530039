<?php
include'announcement.php';

session_start(); 

unset($_SESSION['id']); //清除單一變數 
unset($_SESSION['password']);

header('location: index.php'); //首頁還沒放上去，代改 

?>