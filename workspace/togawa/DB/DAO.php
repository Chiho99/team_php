<?php

class DAO {
  public function FindAll(){
    // データベースへの接続
    $con = mysqli_connect("", "", "", "");
    if($con == FALSE){
      return FALSE;
    }

    // 文字コードの設定
    mysqli_set_charset($con, "utf8");

    // SQLの実行
    $sql = "";
    $result = mysqli_query($con, $sql);

    // レコードの取得
    $records = array();

    while($record == mysqli_fetch_array($result, MYSQLI_ASSOC)){
      array_push($records, $record);
    }

    // 検索結果をメモリから解放
    mysqli_free_reslut($result);

    // データベースの接続を切断
    mysqli_close($con);

    return $records;
  }

}

 ?>
