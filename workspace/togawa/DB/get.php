<?php
$servername = "153.127.30.45";
$username = "root";
$password = "Ycyc2112#";
$db = "pritimes";

$con = mysqli_connect($servername, $username, $password, $db);
if($con->connect_error){
  die("Connection failed : ". $con->connect_error);
}

mysqli_select_db($con, $db) or die("error: not select");
mysqli_set_charset($con, "utf8");

$sql = "SELECT * FROM prtimes.pvYu";
$result = mysqli_query($con, $sql);

$records = array();
while($record = mysqli_fetch_array($result, MYSQLI_NUM)){
  $records[] = $record;
}

for($a = 0;$a < 30;$a++){
  echo $records + "<br>";
}

 ?>
