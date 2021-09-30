<?php
//セッションの復元
session_start();
//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

$id=$_GET["id"];

//編集・削除キー
$operation = "delete";

$data = mysqli_query($sql4, "SELECT * FROM `rss_information` WHERE id LIKE '$id'");
while($row=mysqli_fetch_assoc($data)) {
include('parts/rss_info.php');
}

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
	if ($operation == 'edit') {
		
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql4, "DELETE FROM `rss_information` WHERE id LIKE '$id' LIMIT 1");
	}


//写真を削除
if($operation=='delete'){
	if(file_exists('./photo/'.$no.'_1.jpg')){
		unlink('./photo/'.$no.'_1_m.jpg');
		unlink('./photo/'.$no.'_1.jpg');
	}
	if(file_exists('./photo/'.$no.'2.jpg')){
		unlink('./photo/'.$no.'_2_m.jpg');
		unlink('./photo/'.$no.'_2.jpg');
	}
	if(file_exists('./photo/'.$no.'3.jpg')){
		unlink('./photo/'.$no.'_3_m.jpg');
		unlink('./photo/'.$no.'_3.jpg');
	}
	if(file_exists('./photo/'.$no.'4.jpg')){
		unlink('./photo/'.$no.'_4_m.jpg');
		unlink('./photo/'.$no.'_4.jpg');
	}
	if(file_exists('./photo/'.$no.'5.jpg')){
		unlink('./photo/'.$no.'_5_m.jpg');
		unlink('./photo/'.$no.'_5.jpg');
	}
	if(file_exists('./photo/'.$no.'6.jpg')){
		unlink('./photo/'.$no.'_6_m.jpg');
		unlink('./photo/'.$no.'_6.jpg');
	}
	if(file_exists('./photo/'.$no.'7.jpg')){
		unlink('./photo/'.$no.'_7_m.jpg');
		unlink('./photo/'.$no.'_7.jpg');
	}
	if(file_exists('./photo/'.$no.'8.jpg')){
		unlink('./photo/'.$no.'_8_m.jpg');
		unlink('./photo/'.$no.'_8.jpg');
	}
	if(file_exists('./photo/'.$no.'9.jpg')){
		unlink('./photo/'.$no.'_9_m.jpg');
		unlink('./photo/'.$no.'_9.jpg');
	}
	if(file_exists('./photo/'.$no.'10.jpg')){
		unlink('./photo/'.$no.'_10_m.jpg');
		unlink('./photo/'.$no.'_10.jpg');
	}
	if(file_exists('./photo/'.$no.'11.jpg')){
		unlink('./photo/'.$no.'_11_m.jpg');
		unlink('./photo/'.$no.'_11.jpg');
	}
	if(file_exists('./photo/'.$no.'12.jpg')){
		unlink('./photo/'.$no.'_12_m.jpg');
		unlink('./photo/'.$no.'_12.jpg');
	}
}


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="0;URL=insta_photo3.php">
<title></title>
</head>

<body>
</body>
</html>