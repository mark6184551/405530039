<?php
session_start();

if(isset($_POST['userid'])){
require("Announcement.php");
$username=$_POST['userid'];
$password=$_POST['password'];
$data=mysql_query("select * from admin where userid = '$username' and password = '$password'");
 if(mysql_num_rows($data)>=1){
  header("location:admit.php");
  $_SESSION['v']="yes";
 }else{
  header("location:login.php?msg=error");
 }
}
?>
<!DOCTYPE html PUBLIC >
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>管理員登入介面</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
 *{
  padding:0;
  margin:0;
 }
 .container{
  padding:20px 0;
        background-color:#f5f5f5;
        width:800px;
 }
 h2{
  font-family:微軟正黑體;
  padding:0 0 20px 0;
 }
 .btn{
  font-size:20px;
  font-family:微軟正黑體;
 }
 .respond{
  text-align:center;
  padding:20px 0;
  font-family:微軟正黑體;
  font-size:20px;
 }
</style>
</head>

<body>
<div class="container">
 <h2 align="center">管理員登入</h2>
    <form class="form-horizontal" role="form" id="form1" name="form1" method="post" action="">
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="usr">UserName:</label>
        <div class="col-sm-4">
            <input name="usr" type="text" class="form-control" id="usr" placeholder="Enter username">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-4 for="pwd">Password:</label>
        <div class="col-sm-4">
            <input name="pwd" type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
    </div>
    <div>
        <div align="center" style="padding-top:30px">
            <input name="button" type="submit" class="btn" id="button" value="確認" />
        </div>
      </div>
    </form>
    <div class="respond">
    <?php
        if($_GET['msg']=="error"){
            echo'<p class="bg-danger">查無此人</p>';
        }
    ?>
    </div>
</div>
</body>
</html>