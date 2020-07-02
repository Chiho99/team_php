<?php
$servername = "sql213.epizy.com";
$username = "epiz_26150935";
$password = "Vqj5wD1SSh";

$db = "epiz_26150935_pvdata";

//
//data take
$xn=file_get_contents("https://hackathon.stg-prtimes.net/pv/1?from=2020-01-20&to=2020-01-21&token=e7zCG8N0sl5y");
$ja=json_decode($xn,true);


// Create connection

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "vodka";

foreach($ja["data"] as $el) {
$cid=$el["company_id"];
$rid=$el["release_id"];
$pv=$el["pv"];
$zn=file_get_contents("https://hackathon.stg-prtimes.net/detail/".$cid."/".$rid."?token=e7zCG8N0sl5y");
$jx=json_decode($zn,true);
//var_dump($jx["data"]);
$cate=$jx["data"]["main_category_id"];
$titl=$jx["data"]["title"];
$body=$jx["data"]["body"];
    

echo $cid; echo ",";
echo $rid; echo ",";
echo $pv; echo"<br>";
$sql = "INSERT INTO pv (company, rel, category, pv, title, body)
VALUES (".$cid.", ".$rid.", ".$cate.", ".$pv.", '".$titl."', '".$body."')";
//$sql = "INSERT INTO pv (company, rel, category, pv, title, body)
//VALUES (1, 2, 3, 4, 'vodka', 'kk')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();

?>
