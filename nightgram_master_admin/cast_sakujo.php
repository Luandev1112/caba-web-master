<?php
//設定ファイル読み込み
require_once('conf.php');

#フォームからの生データ
$name2 = $_GET['name2'];
$id = $_GET['id'];
$name = $_GET['name'];
$yobi1 = $_GET['yobi1'];
$option2 = $_GET['option2'];
$option4 = $_GET['option4'];

$result=mysqli_query($sql2, "SELECT * From `data_buckup` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu2.php');
}

//編集・削除キー
$operation = "delete";

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql3, "UPDATE `data` SET `name2`='$name2',`option1`='$option1' WHERE `name2` LIKE '$name2' LIMIT 1");
	} elseif ($operation == 'delete') {
		
//		array_splice($data , $i , 1);
		
		mysqli_query($sql2, "DELETE FROM `data_buckup` WHERE name2 LIKE '$name2' LIMIT 1");

	}

//写真を削除
if($operation=='delete'){
	if(file_exists('./photo/'.$name2.'_1.jpg')){
		unlink('./photo/'.$name2.'_1_m.jpg');
		unlink('./photo/'.$name2.'_1.jpg');
	}
	if(file_exists('./photo/'.$name2.'2.jpg')){
		unlink('./photo/'.$name2.'_2_m.jpg');
		unlink('./photo/'.$name2.'_2.jpg');
	}
	if(file_exists('./photo/'.$name2.'3.jpg')){
		unlink('./photo/'.$name2.'_3_m.jpg');
		unlink('./photo/'.$name2.'_3.jpg');
	}
	if(file_exists('./photo/'.$name2.'4.jpg')){
		unlink('./photo/'.$name2.'_4_m.jpg');
		unlink('./photo/'.$name2.'_4.jpg');
	}
	if(file_exists('./photo/'.$name2.'5.jpg')){
		unlink('./photo/'.$name2.'_5_m.jpg');
		unlink('./photo/'.$name2.'_5.jpg');
	}
	if(file_exists('./photo/'.$name2.'6.jpg')){
		unlink('./photo/'.$name2.'_6_m.jpg');
		unlink('./photo/'.$name2.'_6.jpg');
	}
	if(file_exists('./photo/'.$name2.'7.jpg')){
		unlink('./photo/'.$name2.'_7_m.jpg');
		unlink('./photo/'.$name2.'_7.jpg');
	}
	if(file_exists('./photo/'.$name2.'8.jpg')){
		unlink('./photo/'.$name2.'_8_m.jpg');
		unlink('./photo/'.$name2.'_8.jpg');
	}
	if(file_exists('./photo/'.$name2.'9.jpg')){
		unlink('./photo/'.$name2.'_9_m.jpg');
		unlink('./photo/'.$name2.'_9.jpg');
	}
	if(file_exists('./photo/'.$name2.'10.jpg')){
		unlink('./photo/'.$name2.'_10_m.jpg');
		unlink('./photo/'.$name2.'_10.jpg');
	}
}

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="0;URL=cast_buckup.php?no=<?php echo $no; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>