<?php
include 'announcement.php';

$userid = $_POST["userid"];
$password = $_POST["password"];

/*$SQL = "INSERT INTO `login`(`ID`, `PASS`) VALUES ('PETER','1234')";
mysqli_query($conn,$SQL);*/

$SQL = "SELECT `id`, `password` FROM `member` WHERE id = '".$userid."' and password = '".$password."'";
//if(mysqli_query($conn,$SQL)){echo "New record created sucessfully";}else{echo "Error:" .$SQL."<br>".$conn->error;}
$userid = strtoupper($userid);
if (mysqli_num_rows(mysqli_query($conn,$SQL)) > 0 && $userid=="PETER") {
	session_start();
	$_SESSION["id"]=$userid;
	$_SESSION["password"] = $password;
 	header("Refresh: 0.005; url=manager_index.php" );//0.005秒之後跳轉到管理員介面
}else if(mysqli_num_rows(mysqli_query($conn,$SQL)) > 0){
	session_start();
	$_SESSION["id"]=$userid;
	$_SESSION["password"] = $password;
 	header("Refresh: 0.005; url=index.html" );//0.005秒之後跳轉到首頁
}else{
	//   echo "失敗</br>";
	//    echo "錯誤的帳號密碼</br>";
	//    echo "你沒有這個權限</br>";
	   echo '<script>alert("帳號或密碼錯誤");history.go(-1);</script>';//提示錯誤後跳轉到登入頁面 
}
//echo $SQL;
mysqli_close($conn);
?>

<html>
<body>
</hr>
<br>
帳號:<?php echo $userid; ?><br>
密碼:<?php echo $password; ?><br>
</body>
</html>