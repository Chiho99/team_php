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

$cate=$_GET["cat"];
$lim=$_GET["lim"];
if ($cate."q"=="q") {
$cate=1;
}
if ($cate."q"=="q") {
$cate=5;
}

$sql = "SELECT DISTINCT * FROM pv WHERE category=".$cate." ORDER BY pv LIMIT ".$lim;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$bangou=0;
  // output data of each row
  while($row = $result->fetch_assoc()) {
 //   echo "image: ".$row["image"]." cid: " . $row["company"]. " - rid: " . $row["rel"]. " pv:" . $row["pv"]. ":".$row["title"]. "<br>";

  $bangou=$bangou+1;
  echo "<li>".'<img src="'.$row["image"].'"> <br><div class="title" id="'.$bangou.'"><h3>'.$row["title"].'</h3> <span id="content">'.substr(strip_tags($row["body"]),0,100).'</span> </div><br></li><hr class="pv_bar">';

  }
} else {
  echo "0 results";
}
$conn->close();
?>