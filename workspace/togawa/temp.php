<?php
// データベースに接続
$con = mysqli_connect("", "", "", "");

// 接続失敗時の処理
if($con){
  exit("データベースへの接続に失敗しました。");
}

// 文字化け対策
mysqli_set_charset($con, "utf8");

// SQLの実行
$sql = "SELECT pv FROM "; // DB名
$result = mysqli_query($con, "$sql");

// レコード数を取得
$rows = mysqli_num_rows($result);

// レコードの取得
while($record = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  
}

 ?>
