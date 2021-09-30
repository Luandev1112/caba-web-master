<?php
//設定ファイル読み込み
require_once('../conf.php');

$no = $_GET['no'];

//フォームからデータ受け取り
$news_id = $_GET['news_id'];
$news_no = $_POST['news_no'];
$start = $_POST['start'];
$sort = $_POST['sort'];
$end = $_POST['end'];
$sort2 = $_POST['sort2'];
$time = $_POST['time'];
$newstitle = $_POST['newstitle'];
$input = $_POST['input'];
$photo1 = $_POST['photo1'];
$jpeg = $_POST['jpeg'];
$link = $_POST['link'];
$n_select = $_POST['n_select'];
$blank = $_POST['blank'];
$hotnews = $_POST['hotnews'];
$n_area = $_POST['n_area'];
$n_area2 = $_POST['n_area2'];
$n_gyoushu = $_POST['n_gyoushu'];
$n_link = $_POST['n_link'];
$sort_order = $_POST['sort_order'];
//編集・削除キー
$operation = $_POST['operation'];

//編集・削除キー
$operation = "delete";

//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql2, "UPDATE `news` SET `news_id`='$news_id',`start`='$start',`sort`='$sort',`end`='$end',`sort2`='$sort2',`time`='$time',`newstitle`='$newstitle',`input`='$input',`photo1`='$photo1',`jpeg`='$jpeg',`link`='$link',`blank`='$blank',`hotnews`='$hotnews',`n_area`='$n_area',`n_area2`='$n_area2',`n_gyoushu`='$n_gyoushu',`n_link`='$n_link',`news_no`='$news_no',`sort_order`='$sort_order' WHERE `news_id` LIKE '$news_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql2, "DELETE FROM `news` WHERE news_id LIKE '$news_id' LIMIT 1");
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

$result=mysqli_query($sql2, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu5.php');
}

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `data5` = '$blank'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=hotnews.php?no=<?php echo $no; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>