<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからデータ受け取り
$news_id = $_GET['news_id'];

$result=mysqli_query($sql, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu2.php');
}

//編集・削除キー
$operation = "delete";

//配列入れ替え

$result=mysqli_query($sql, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu2.php');
}

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `news` SET `news_id`='$news_id',`start`='$start',`sort`='$sort',`end`='$end',`sort2`='$sort2',`time`='$time',`newstitle`='$newstitle',`input`='$input',`photo1`='$photo1',`jpeg`='$jpeg',`link`='$link',`blank`='$blank',`hotnews`='$hotnews' WHERE `news_id` LIKE '$news_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `news` WHERE news_id LIKE '$news_id' LIMIT 1");
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
	if(file_exists('./photo/'.$news_id.'_1.jpg')){
		unlink('./photo/'.$news_id.'_1.jpg');
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
<meta http-equiv="refresh" content="0;URL=hotnews.php?shop_id=<?php echo $blank; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>