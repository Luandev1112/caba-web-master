<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからデータ受け取り
$master_news_id = $_GET['master_news_id'];

//編集・削除キー
$operation = "delete";

//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `master_news` SET `master_news_id`='$master_news_id',`start`='$start',`sort`='$sort',`end`='$end',`sort2`='$sort2',`time`='$time',`newstitle`='$newstitle',`input`='$input',`photo1`='$photo1',`jpeg`='$jpeg',`link`='$link',`blank`='$blank' WHERE `master_news_id` LIKE '$master_news_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `master_news` WHERE master_news_id LIKE '$master_news_id' LIMIT 1");
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);


//写真を削除
if($operation=='delete'){
	if(file_exists('./photo/'.$id.'1.jpg')){
		unlink('./photo/'.$id.'1.jpg');
	}
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=osirase.php">
<title>出勤管理</title>
</head>

<body>
</body>
</html>