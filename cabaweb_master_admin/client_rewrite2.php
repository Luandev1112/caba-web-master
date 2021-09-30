<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからの生データ
$master_id = $_GET['master_id'];
//編集・削除キー
$operation = "delete";

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `data5` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu8.php');
}

if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `shop` SET `master_id`='$master_id',`s_url`='$s_url',`login_id`='$login_id',`login_pass`='$login_pass',`shop_name`='$shop_name',`shop_name2`='$shop_name2',`s_area`='$s_area',`daihyo`='$daihyo',`add`='$add',`shop_tell`='$shop_tell',`mail`='$mail',`time1`='$time1',`sdata1`='$sdata1',`sdata2`='$sdata2',`sdata3`='$sdata3',`sdata4`='$sdata4',`sdata5`='$sdata5',`sdata6`='$sdata6',`sdata7`='$sdata7',`sdata8`='$sdata8',`sdata9`='$sdata9',`sdata10`='$sdata10',`time2`='$time2',`time3`='$time3',`time4`='$time4',`group_id`='$group_id',`portal`='$portal' WHERE `master_id` LIKE '$master_id' LIMIT 1");
		
		mysqli_query($sql, "UPDATE `data` SET `option6`='$portal',`option7`='$area',`option8`='$area2',`option9`='$hyouji' WHERE `yobi1` LIKE '$shop_id'");
		
		mysqli_query($sql, "UPDATE `news` SET `hotnews`='$portal',`n_area`='$area',`n_area2`='$area2',`end`='$hyouji' WHERE `blank` LIKE '$shop_id'");
		
		
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `shop` WHERE master_id LIKE '$master_id' LIMIT 1");
	
	mysqli_query($sql, "DELETE FROM `data` WHERE yobi1 LIKE '$login_id'");
	
	mysqli_query($sql, "DELETE FROM `news` WHERE blank LIKE '$master_id'");
	}

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>shop登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=login_top.php">
<title>出勤管理</title>
</head>

<body>
</body>
</html>