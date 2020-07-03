<?php
$servername = "localhost";
$username = "root";
$password = "Ycyc2112#";

$db = "pvdata";

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$cat=1;
while($cat<93) {
$tre=0;
while($tre<10) {

$sql = "CREATE TABLE tren_".$cat."_".$tre." (company int, rel int,title text)";
$result = $conn->query($sql);

 $tre=$tre+1;
}
 $cat=$cat+1;
}


$conn->close();
?>