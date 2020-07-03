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

$sql = "SELECT * FROM pv WHERE category=".$cate." ORDER BY pv LIMIT ".$lim;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 //   echo "image: ".$row["image"]." cid: " . $row["company"]. " - rid: " . $row["rel"]. " pv:" . $row["pv"]. ":".$row["title"]. "<br>";
  echo "<li>".'<img src="'.$row["image"].'"> <br>'.$row["title"]."<br></li>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>