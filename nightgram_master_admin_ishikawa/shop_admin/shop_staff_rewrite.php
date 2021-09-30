<?php
//セッションの復元
session_start();

//ログインチェック
require_once '../login_check.php';

//設定ファイル読み込み
require_once('../conf.php');

//受け取りデータを変数に代入
require_once "var2.php";

$s_id_staff=$_POST["s_id_staff"];


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
		mysqli_query($sql, "UPDATE `shop_tb3` SET `s_id_staff`='$s_id_staff',`staff`='$staff',`staffb`='$staffb',`staff1`='$staff1',`staff1a`='$staff1a',`staff1b`='$staff1b',`staff1c`='$staff1c',`staff1d`='$staff1d',`staff1e`='$staff1e',`staff2`='$staff2',`staff2a`='$staff2a',`staff2b`='$staff2b',`staff2c`='$staff2c',`staff2d`='$staff2d',`staff2e`='$staff2e',`staff2f`='$staff2f',`staff2g`='$staff2g',`staff2h`='$staff2h',`staff2i`='$staff2i',`staff2j`='$staff2j',`staff2k`='$staff2k',`staff2l`='$staff2l',`staff2m`='$staff2m',`staff2n`='$staff2n',`staff2o`='$staff2o',`staff3`='$staff3',`staff3a`='$staff3a',`staff3b`='$staff3b',`staff3c`='$staff3c',`staff3d`='$staff3d',`staff3e`='$staff3e',`staff3f`='$staff3f',`staff3g`='$staff3g',`staff3h`='$staff3h',`staff3i`='$staff3i',`staff3j`='$staff3j',`staff3k`='$staff3k',`staff3l`='$staff3l',`staff3m`='$staff3m',`staff3n`='$staff3n',`staff3o`='$staff3o',`staff3p`='$staff3p',`staff3q`='$staff3q',`staff3r`='$staff3r',`staff3s`='$staff3s',`staff4`='$staff4',`blog`='$blog' WHERE `s_id_staff` LIKE '$s_id_staff' LIMIT 1");
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
<meta http-equiv="refresh" content="0;URL=shop_staff.php?no=<?php echo $no; ?>">
<title></title>
</head>

<body>
</body>
</html>