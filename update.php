<?php
include 'announcement.php';
session_start();
$id = $_SESSION["id"];
$password = $_POST["password"];
$email = $_POST["email"];
$birth = $_POST["birth"];
$sex = $_POST["sex"];
$county = $_POST["county"];
$M_name = $_POST["M_name"];
echo $password;
$SQL="UPDATE `member` SET `password`='$password',`email`='$email',`birth`='$birth',`sex`='$sex',`county`='$county',`M_name`='$M_name' WHERE `id` = '$id'";
mysqli_query($conn,$SQL);
mysqli_close($conn);
header('location: change.php');
?>