<?php
//セッションの復元
session_start();


//設定ファイル読み込み
require_once('../conf.php');

//受け取りデータを変数に代入
require_once "var2.php";

$s_id_rec=$_POST["s_id_rec"];


$no = $_POST['no'];

//編集・削除キー
$operation = $_POST['operation'];

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
		if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `shop_tb2` SET `s_id_rec`='$s_id_rec',`rec1`='$rec1',`rec1b`='$rec1b',`rec2`='$rec2',`rec2a`='$rec2a',`rec2b`='$rec2b',`rec2c`='$rec2c',`rec2d`='$rec2d',`rec2e`='$rec2e',`rec2f`='$rec2f',`rec2g`='$rec2g',`rec2h`='$rec2h',`rec2i`='$rec2i',`rec2j`='$rec2j',`rec2k`='$rec2k',`rec2l`='$rec2l',`rec2m`='$rec2m',`rec2n`='$rec2n',`rec2o`='$rec2o',`rec3`='$rec3',`rec3a`='$rec3a',`rec3b`='$rec3b',`rec3c`='$rec3c',`rec3d`='$rec3d',`rec3e`='$rec3e',`rec4`='$rec4',`rec4a`='$rec4a',`rec4b`='$rec4b',`rec4c`='$rec4c',`rec4d`='$rec4d',`rec4e`='$rec4e',`rec4f`='$rec4f',`rec4g`='$rec4g',`rec4h`='$rec4h',`rec4i`='$rec4i',`rec4j`='$rec4j',`rec4k`='$rec4k',`rec5`='$rec5',`rec5a`='$rec5a',`rec5b`='$rec5b',`rec5c`='$rec5c',`rec5d`='$rec5d',`rec5e`='$rec5e',`rec5f`='$rec5f',`rec5g`='$rec5g',`rec5h`='$rec5h',`rec5i`='$rec5i',`rec5j`='$rec5j',`rec5k`='$rec5k',`rec5l`='$rec5l',`rec5m`='$rec5m',`rec5n`='$rec5n',`rec5o`='$rec5o',`rec5p`='$rec5p',`rec5q`='$rec5q',`rec5r`='$rec5r',`rec5s`='$rec5s',`contact1`='$contact1',`contact1a`='$contact1a',`contact1b`='$contact1b',`contact1c`='$contact1c',`contact1d`='$contact1d',`contact2`='$contact2' WHERE `s_id_rec` LIKE '$s_id_rec' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `shop_tb` WHERE no LIKE '$no' LIMIT 1");
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
<meta http-equiv="refresh" content="0;URL=shop_rec.php?no=<?php echo $no; ?>">
<title></title>
</head>

<body>
</body>
</html>