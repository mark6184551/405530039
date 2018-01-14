<?php
include 'announcement.php';

$userid = $_POST["userid"];
$password = $_POST["password"];
$email = $_POST["email"];
$birth = $_POST["birth"];
$sex = $_POST["sex"];
$county = $_POST["county"];
$M_name = $_POST["M_name"];
/*$SQL = "INSERT INTO `login`(`ID`, `PASS`) VALUES ('PETER','1234')";
mysqli_query($conn,$SQL);*/

$SQL="INSERT INTO `member`(`id`, `password`, `email`, `birth`, `sex`, `county`, `M_name`) VALUES ('$userid','$password','$email','$birth','$sex','$county','$M_name')";
mysqli_query($conn,$SQL);

mysqli_close($conn); //關閉資料庫連結
echo '<script>alert("註冊成功!");window.location.replace("login.html");//跳轉到login.html</script>';
//header( "location:login.html");  //回login.html
?>
