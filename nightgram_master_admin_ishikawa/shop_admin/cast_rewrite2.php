<?php
//設定ファイル読み込み
require_once('../conf.php');

$no = $_POST['no'];

#フォームからの生データ
$name2 = $_POST['name2'];
$option1 = $_POST['option1'];
$yobi1 = $_POST['yobi1'];
//編集・削除キー
$operation = $_POST['operation'];

//時間をソート用に変換　0:30-4:30
include("../parts/starttime_conversion.php");

//書込みデータを結合
//$line = array($id,$name,$name2,$age,$height,$weight,$bust,$cup,$waist,$hip,$comment,$comment2,$profinfo1,$profinfo2,$profinfo3,$profinfo4,$profinfo5,$profinfo6,$profinfo7,$profinfo8,$profinfo9,$profinfo10,$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8,$option9,$option10,$option11,$option12,$option13,$option14,$option15,$option16,$option17,$option18,$option19,$option20,$option21,$option22,$option23,$option24,$option25,$option26,$option27,$option28,$option29,$option30,$option31,$option32,$option33,$option34,$option35,$option36,$option37,$option38,$option39,$option40,$photo1,$photo2,$photo3,$photo4,$photo5,$photo6,$photo7,$photo8,$photo9,$photo10,$yotei1,$start1,$end1,$yotei2,$start2,$end2,$yotei3,$start3,$end3,$yotei4,$start4,$end4,$yotei5,$start5,$end5,$yotei6,$start6,$end6,$yobi1,$yobi2,$yobi3,$yobi4,$yobi5,$yobi6,$yobi7,$yobi8,$yobi9,$yobi10,$edittime);
//$line = implode(',' , $line);
//$line = $line . "\n";

//編集・削除キー
$operation = $_POST['operation'];

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql2, "UPDATE `data` SET `name2`='$name2',`option1`='$option1' WHERE `name2` LIKE '$name2' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql2, "DELETE FROM `data` WHERE name2 LIKE '$name2' LIMIT 1");
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
<meta http-equiv="refresh" content="0;URL=cast.php?no=<?php echo $no; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>