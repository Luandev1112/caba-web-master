<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからの生データ
$id = $_GET['id'];
//編集・削除キー
$operation = "delete";

//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `shop` SET `id`='$id',`url`='$url',`shop_id`='$shop_id',`shop_pass`='$shop_pass',`shop_name`='$shop_name',`daihyo`='$daihyo',`add`='$add',`tell`='$tell',`mail`='$mail',`time1`='$time1',`data1`='$data1',`data2`='$data2',`data3`='$data3',`data4`='$data4',`data5`='$data5',`data6`='$data6',`time2`='$time2',`time3`='$time3',`time4`='$time4' WHERE `id` LIKE '$id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `shop` WHERE id LIKE '$id' LIMIT 1");
		
		mysqli_query($sql, "DELETE FROM `data` WHERE yobi1='".$shop_id."'");
		
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="0;URL=customer.php">
<title>出勤管理</title>
</head>

<body>
</body>
</html>