<?php
//設定ファイル読み込み
require_once('../conf.php');

$master_id = $_POST['master_id'];

$news_id = $_GET['news_id'];


//編集・削除キー
$operation = "delete";

//配列入れ替え

$result=mysqli_query($sql3, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu2.php');
}

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `login_id` = '$blank'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
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

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql3, "UPDATE `news` SET `news_id`='$news_id',`news_no`='$news_no',`start`='$start',`sort`='$sort',`end`='$end',`sort2`='$sort2',`time`='$time',`newstitle`='$newstitle',`input`='$input',`photo1`='$photo1',`jpeg`='$jpeg',`link`='$link',`n_select`='$n_select',`blank`='$blank',`hotnews`='$hotnews',`sort_order`='$sort_order',`n_area`='$n_area',`n_area2`='$n_area2',`n_gyoushu`='$n_gyoushu' WHERE `news_id` LIKE '$news_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql3, "DELETE FROM `news` WHERE news_id LIKE '$news_id' LIMIT 1");
	}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=event.php?master_id=<?php echo $master_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>