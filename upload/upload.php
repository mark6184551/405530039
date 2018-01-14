<?php
error_reporting(0);
if(empty($_POST["file"])!=true){
  echo "height:".$_POST["height"]."<br>";
  echo "weight:".$_POST["weight"]."<br>";
  echo "BMI:".($_POST["weight"]/($_POST["height"]*$_POST["height"]))."<br>";
  /*header('Content-type: image/png');*/
  echo '<img src="file/'.$_POST["file"].'"/>';
}
else echo "您未上傳圖片";
?>