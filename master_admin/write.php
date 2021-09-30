<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからの生データ
$id = $_POST['id'];
$url = $_POST['url'];
$shop_id = htmlspecialchars($_POST['shop_id'] , ENT_QUOTES);
$shop_pass = htmlspecialchars($_POST['shop_pass'] , ENT_QUOTES);
$shop_name = htmlspecialchars($_POST['shop_name'] , ENT_QUOTES);
$daihyo = htmlspecialchars($_POST['daihyo'] , ENT_QUOTES);
$add = htmlspecialchars($_POST['add'] , ENT_QUOTES);
$tell = $_POST['tell'];
$mail = $_POST['mail'];
$time1 = $_POST['time1'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];
$data4 = $_POST['data4'];
$data5 = $_POST['data5'];
$data6 = $_POST['data6'];
$data7 = $_POST['data7'];
$data8 = $_POST['data8'];
$data9 = $_POST['data9'];
$data10 = $_POST['data10'];
$time2 = $_POST['time2'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$group_id = htmlspecialchars($_POST['group_id'] , ENT_QUOTES);
$portal= $_POST['portal'];

$name2 = $shop_id;
$name = $shop_id;
$shop_no = $shop_id;
$taiken_id = $id;

//文字コード変換
$url = mb_convert_encoding($url,'UTF-8','AUTO');
$shop_id = mb_convert_encoding($shop_id,'UTF-8','AUTO');
$shop_pass = mb_convert_encoding($shop_pass,'UTF-8','AUTO');
$shop_name = mb_convert_encoding($shop_name,'UTF-8','AUTO');
$daihyo = mb_convert_encoding($daihyo,'UTF-8','AUTO');
$add = mb_convert_encoding($add,'UTF-8','AUTO');
$tell = mb_convert_encoding($tell,'UTF-8','AUTO');
$mail = mb_convert_encoding($mail,'UTF-8','AUTO');
$time1 = mb_convert_encoding($time1,'UTF-8','AUTO');
$data1= mb_convert_encoding($data1,'UTF-8','AUTO');
$data2 = mb_convert_encoding($data2,'UTF-8','AUTO');
$data3 = mb_convert_encoding($data3,'UTF-8','AUTO');
$data4 = mb_convert_encoding($data4,'UTF-8','AUTO');
$data5 = mb_convert_encoding($data5,'UTF-8','AUTO');
$data6 = mb_convert_encoding($data6,'UTF-8','AUTO');
$data7 = mb_convert_encoding($data7,'UTF-8','AUTO');
$data8 = mb_convert_encoding($data8,'UTF-8','AUTO');
$data9 = mb_convert_encoding($data9,'UTF-8','AUTO');
$data10 = mb_convert_encoding($data10,'UTF-8','AUTO');

//半角小文字に変換
$shop_id = mb_convert_kana($shop_id,'a','utf-8');
$shop_id = strtolower($shop_id);

$shop_pass = mb_convert_kana($shop_pass,'a','utf-8');
$shop_pass = strtolower($shop_pass);

$group_id = mb_convert_kana($group_id,'a','utf-8');
$group_id = strtolower($group_id);

//テキストを整形
$shop_name = mb_convert_kana($shop_name,'KaV','utf-8');
$daihyo = mb_convert_kana($daihyo,'KaV','utf-8');
$add = mb_convert_kana($add,'KaV','utf-8');
$tell = mb_convert_kana($tell,'KaV','utf-8');
$mail = mb_convert_kana($mail,'KaV','utf-8');
$data1 = mb_convert_kana($data1,'KaV','utf-8');
$data2 = mb_convert_kana($data2,'KaV','utf-8');
$data3 = mb_convert_kana($data3,'KaV','utf-8');
$data4 = mb_convert_kana($data4,'KaV','utf-8');
$data5 = mb_convert_kana($data5,'KaV','utf-8');
$data6 = mb_convert_kana($data6,'KaV','utf-8');
$data7 = mb_convert_kana($data7,'KaV','utf-8');
$data8 = mb_convert_kana($data8,'KaV','utf-8');
$data9 = mb_convert_kana($data9,'KaV','utf-8');
$data10 = mb_convert_kana($data10,'KaV','utf-8');

//[']を除去  SQL用追加
$shop_name = str_replace('\'' , '' , $shop_name);
$daihyo = str_replace('\'' , '' , $daihyo);
$add = str_replace('\'' , '' , $add);
$tell = str_replace('\'' , '' , $tell);
$mail = str_replace('\'' , '' , $mail);
$data1 = str_replace('\'' , '' , $data1);
$data2 = str_replace('\'' , '' , $data2);
$data3 = str_replace('\'' , '' , $data3);
$data4 = str_replace('\'' , '' , $data4);
$data5 = str_replace('\'' , '' , $data5);
$data6 = str_replace('\'' , '' , $data6);
$data7 = str_replace('\'' , '' , $data7);
$data8 = str_replace('\'' , '' , $data8);
$data9 = str_replace('\'' , '' , $data9);
$data10 = str_replace('\'' , '' , $data10);


$result=mysqli_query($sql, "SELECT * From `shop`");

mysqli_query($sql, "INSERT INTO `shop` VALUES ($id,'$url','$shop_id','$shop_pass','$shop_name','$daihyo','$add','$tell','$mail','$time1','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10','$time2','$time3','$time4','$group_id','$portal')");

$result=mysqli_query($sql, "SELECT * From `data2`");

mysqli_query($sql, "INSERT INTO `data2` VALUES ($id,'$name','$name2','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$photo10','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$edittime')");

$result=mysqli_query($sql, "SELECT * From `data3`");

mysqli_query($sql, "INSERT INTO `data3` VALUES ($id,'$name','$name2','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$photo10','$photo11','$photo12','$photo13','$photo14','$photo15','$photo16','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$edittime')");

$result=mysqli_query($sql, "SELECT * From `data4`");

mysqli_query($sql, "INSERT INTO `data4` VALUES ($id,'$name','$name2','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$photo10','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$edittime')");


$result=mysqli_query($sql, "SELECT * From `data6`");

mysqli_query($sql, "INSERT INTO `data6` VALUES ($id,'$name','$name2','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$photo10','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$edittime')");


$result=mysqli_query($sql, "SELECT * From `taiken`");

mysqli_query($sql, "INSERT INTO `taiken` VALUES ($taiken_id,'$shop_no','$taiken_num','$taiken_limit')");

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=customer.php">
<title>出勤管理</title>
</head>

<body>
</body>
</html>