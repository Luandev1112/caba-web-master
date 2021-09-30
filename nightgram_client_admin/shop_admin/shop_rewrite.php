<?php
//セッションの復元
session_start();

//ログインチェック
require_once '../login_check.php';

//設定ファイル読み込み
require_once('../conf.php');

//受け取りデータを変数に代入
require_once "var2.php";

$s_id=$_POST["s_id"];


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
		mysqli_query($sql, "UPDATE `shop_tb` SET `s_id`='$s_id',`s_name`='$s_name',`s_name2`='$s_name2',`no`='$no',`shop_id`='$shop_id',`shop_pass`='$shop_pass',`sort`='$sort',`area`='$area',`area2`='$area2',`gyoushu`='$gyoushu',`address`='$address',`map`='$map',`tel`='$tel',`tel2`='$tel2',`tel3`='$tel3',`tel4`='$tel4',`email`='$email',`data1`='$data1',`data2`='$data2',`data3`='$data3',`data4`='$data4',`data5`='$data5',`url`='$url',`fburl`='$fburl',`twurl`='$twurl',`yturl`='$yturl',`googleurl`='$googleurl',`indoorurl`='$indoorurl',`comment`='$comment',`system1`='$system1',`system1a`='$system1a',`system1b`='$system1b',`system1c`='$system1c',`system1d`='$system1d',`system1e`='$system1e',`system1f`='$system1f',`system1g`='$system1g',`system1h`='$system1h',`system1i`='$system1i',`system1j`='$system1j',`system1k`='$system1k',`system1l`='$system1l',`system1m`='$system1m',`system1n`='$system1n',`system1o`='$system1o',`system1p`='$system1p',`system1q`='$system1q',`system1r`='$system1r',`system1s`='$system1s',`system1t`='$system1t',`system2`='$system2',`system2a`='$system2a',`system2b`='$system2b',`system2c`='$system2c',`system2d`='$system2d',`system2e`='$system2e',`system2f`='$system2f',`system2g`='$system2g',`system2h`='$system2h',`system2i`='$system2i',`system2j`='$system2j',`system2k`='$system2k',`system2l`='$system2l',`system2m`='$system2m',`system2n`='$system2n',`system2o`='$system2o',`system2p`='$system2p',`system2q`='$system2q',`system2r`='$system2r',`system2s`='$system2s',`system2t`='$system2t',`system3`='$system3',`system3a`='$system3a',`system3b`='$system3b',`system3c`='$system3c',`system3d`='$system3d',`system3e`='$system3e',`system3f`='$system3f',`system3g`='$system3g',`system3h`='$system3h',`system3i`='$system3i',`system3j`='$system3j',`system3k`='$system3k',`system3l`='$system3l',`system3m`='$system3m',`system3n`='$system3n',`system3o`='$system3o',`system3p`='$system3p',`system3q`='$system3q',`system3r`='$system3r',`system3s`='$system3s',`system3t`='$system3t',`system4`='$system4',`system4a`='$system4a',`system4b`='$system4b',`system4c`='$system4c',`system4d`='$system4d',`system4e`='$system4e',`system4f`='$system4f',`system4g`='$system4g',`system4h`='$system4h',`system4i`='$system4i',`system4j`='$system4j',`system4k`='$system4k',`system4l`='$system4l',`system4m`='$system4m',`system4n`='$system4n',`system4o`='$system4o',`system4p`='$system4p',`system4q`='$system4q',`system4r`='$system4r',`system4s`='$system4s',`system4t`='$system4t',`comment2`='$comment2',`card1`='$card1',`card2`='$card2',`card3`='$card3',`card4`='$card4',`card5`='$card5',`card6`='$card6',`card7`='$card7',`card8`='$card8',`card9`='$card9',`card10`='$card10',`blank1`='$blank1',`blank2`='$blank2',`blank3`='$blank3',`blank4`='$blank4',`blank5`='$blank5',`sphoto1`='$sphoto1',`sphoto2`='$sphoto2',`sphoto3`='$sphoto3',`sphoto4`='$sphoto4',`sphoto5`='$sphoto5',`sphoto6`='$sphoto6',`sphoto7`='$sphoto7',`sphoto8`='$sphoto8',`sphoto9`='$sphoto9',`sphoto10`='$sphoto10',`sphoto11`='$sphoto11',`sphoto12`='$sphoto12',`touroku`='$touroku',`edittime`='$edittime',`shop`='$shop' WHERE `no` LIKE '$no' LIMIT 1");
		
		//mysqli_query($sql2, "UPDATE `news` SET `n_gyoushu`='$gyoushu'  WHERE `blank` LIKE '$data5'");
		
		mysqli_query($sql2, "UPDATE `data` SET `option23`='$area',`option24`='$area2'  WHERE `yobi1` LIKE '$data5'");
		
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
<meta http-equiv="refresh" content="0;URL=shop_edit.php?no=<?php echo $no; ?>">
<title></title>
</head>

<body>
</body>
</html>