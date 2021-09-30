<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからの生データ
$master_id = $_POST['master_id'];
$s_url = $_POST['s_url'];
$login_id = htmlspecialchars($_POST['login_id'] , ENT_QUOTES);
$login_pass = htmlspecialchars($_POST['login_pass'] , ENT_QUOTES);
$shop_name = htmlspecialchars($_POST['shop_name'] , ENT_QUOTES);
$shop_name2 = htmlspecialchars($_POST['shop_name2'] , ENT_QUOTES);
$s_area = $_POST['s_area'];
$daihyo = htmlspecialchars($_POST['daihyo'] , ENT_QUOTES);
$add = htmlspecialchars($_POST['add'] , ENT_QUOTES);
$shop_tell = $_POST['shop_tell'];
$mail = $_POST['mail'];
$time1 = $_POST['time1'];
$sdata1 = $_POST['sdata1'];
$sdata2 = $_POST['sdata2'];
$sdata3 = $_POST['sdata3'];
$sdata4 = $_POST['sdata4'];
$sdata5 = $_POST['sdata5'];
$sdata6 = $_POST['sdata6'];
$sdata7 = $_POST['sdata7'];
$sdata8 = $_POST['sdata8'];
$sdata9 = $_POST['sdata9'];
$sdata10 = $_POST['sdata10'];
$time2 = $_POST['time2'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$group_id = htmlspecialchars($_POST['group_id'] , ENT_QUOTES);
$portal= $_POST['portal'];

$name2 = $login_id;
$name = $login_id;
$shop_no = $login_id;
$taiken_id = $master_id;
$id = $master_id;

//半角小文字に変換
$login_id = mb_convert_kana($login_id,'a','utf-8');
$login_id = strtolower($login_id);

$login_pass = mb_convert_kana($login_pass,'a','utf-8');
$login_pass = strtolower($login_pass);

$group_id = mb_convert_kana($group_id,'a','utf-8');
$group_id = strtolower($group_id);

//半角小文字に変換
$login_id = mb_convert_kana($login_id,'a','utf-8');
$login_id = strtolower($login_id);

$login_pass = mb_convert_kana($login_pass,'a','utf-8');
$login_pass = strtolower($login_pass);

$group_id = mb_convert_kana($group_id,'a','utf-8');
$group_id = strtolower($group_id);

//テキストを整形
$shop_name = mb_convert_kana($shop_name,'KaV','utf-8');
$shop_name2 = mb_convert_kana($shop_name2,'KaV','utf-8');
$daihyo = mb_convert_kana($daihyo,'KaV','utf-8');
$s_area = mb_convert_kana($s_area,'KaV','utf-8');
$add = mb_convert_kana($add,'KaV','utf-8');
$shop_tell = mb_convert_kana($shop_tell,'KaV','utf-8');
$mail = mb_convert_kana($mail,'KaV','utf-8');
$sdata1 = mb_convert_kana($sdata1,'KaV','utf-8');
$sdata2 = mb_convert_kana($sdata2,'KaV','utf-8');
$sdata3 = mb_convert_kana($sdata3,'KaV','utf-8');
$sdata4 = mb_convert_kana($sdata4,'KaV','utf-8');
$sdata5 = mb_convert_kana($sdata5,'KaV','utf-8');
$sdata6 = mb_convert_kana($sdata6,'KaV','utf-8');
$sdata7 = mb_convert_kana($sdata7,'KaV','utf-8');
$sdata8 = mb_convert_kana($sdata8,'KaV','utf-8');
$sdata9 = mb_convert_kana($sdata9,'KaV','utf-8');
$sdata10 = mb_convert_kana($sdata10,'KaV','utf-8');

//[']を除去  SQL用追加
$shop_name = str_replace('\'' , '' , $shop_name);
$shop_name2 = str_replace('\'' , '' , $shop_name2);
$s_area = str_replace('\'' , '' , $s_area);
$daihyo = str_replace('\'' , '' , $daihyo);
$add = str_replace('\'' , '' , $add);
$tell = str_replace('\'' , '' , $tell);
$mail = str_replace('\'' , '' , $mail);
$sdata1 = str_replace('\'' , '' , $sdata1);
$sdata2 = str_replace('\'' , '' , $sdata2);
$sdata3 = str_replace('\'' , '' , $sdata3);
$sdata4 = str_replace('\'' , '' , $sdata4);
$sdata5 = str_replace('\'' , '' , $sdata5);
$sdata6 = str_replace('\'' , '' , $sdata6);
$sdata7 = str_replace('\'' , '' , $sdata7);
$sdata8 = str_replace('\'' , '' , $sdata8);
$sdata9 = str_replace('\'' , '' , $sdata9);
$sdata10 = str_replace('\'' , '' , $sdata10);


//編集・削除キー
$operation = $_POST['operation'];

$result=mysqli_query($sql2, "SELECT * From `shop_tb` WHERE `data5` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu8.php');
}

if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `shop` SET `master_id`='$master_id',`s_url`='$s_url',`login_id`='$login_id',`login_pass`='$login_pass',`shop_name`='$shop_name',`shop_name2`='$shop_name2',`s_area`='$s_area',`daihyo`='$daihyo',`add`='$add',`shop_tell`='$shop_tell',`mail`='$mail',`time1`='$time1',`sdata1`='$sdata1',`sdata2`='$sdata2',`sdata3`='$sdata3',`sdata4`='$sdata4',`sdata5`='$sdata5',`sdata6`='$sdata6',`sdata7`='$sdata7',`sdata8`='$sdata8',`sdata9`='$sdata9',`sdata10`='$sdata10',`time2`='$time2',`time3`='$time3',`time4`='$time4',`group_id`='$group_id',`portal`='$portal' WHERE `master_id` LIKE '$master_id' LIMIT 1");
		
		mysqli_query($sql3, "UPDATE `data` SET `option6`='$portal',`option23`='$area',`option24`='$area2',`option9`='$hyouji' WHERE `yobi1` LIKE '$login_id'");
		
		mysqli_query($sql3, "UPDATE `news` SET `hotnews`='$portal',`n_area`='$area',`n_area2`='$area2',`end`='$hyouji' WHERE `blank` LIKE '$login_id'");
		
		
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `shop` WHERE id LIKE '$id' LIMIT 1");
	}

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>shop登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=login_top.php">
<title>出勤管理</title>
</head>

<body>
</body>
</html>