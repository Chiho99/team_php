<?php
$servername = "localhost";
$username = "root";
$password = "Ycyc2112#";

$db = "pvdata";

//
//data take
$xn=file_get_contents("https://hackathon.stg-prtimes.net/pv/1?from=".$_GET["from"]."&to=".$_GET["to"]."&token=e7zCG8N0sl5y");
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
$img=$jx["data"]["main_image"];

if ($img."q"=="q") {
$img=" ";
}
    

echo $cid; echo ",";
echo $rid; echo ",";
echo $pv; echo"<br>";
                                                                                     //
$sql="INSERT INTO pv (image,company, rel, category, pv, title, body)
VALUES ('".$img."',".$cid.", ".$rid.", ".$cate.", ".$pv.", '".$titl."', '".$body."')";
                                                                                     
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}
$conn->close();

?>