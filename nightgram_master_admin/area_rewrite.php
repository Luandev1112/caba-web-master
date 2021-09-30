<?php
//セッションの復元
session_start();
//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

//データ受け取り
$toshi_id=$_POST["toshi_id"];
$toshi_name=htmlspecialchars($_POST['toshi_name'] , ENT_QUOTES);
$toshi_color = $_POST['toshi_color'];
$toshi_color2 = $_POST['toshi_color2'];
$toshi_area=$_POST["toshi_area"];
//編集・削除キー
$operation = "edit";

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `toshi_tb` SET `toshi_id`='$toshi_id',`toshi_name`='$toshi_name',`toshi_color`='$toshi_color',`toshi_color2`='$toshi_color2',`toshi_area`='$toshi_area'   WHERE `toshi_id` LIKE '$toshi_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `toshi_tb` WHERE toshi_id LIKE '$toshi_id' LIMIT 1");
	}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>街名編集｜Admin Tool</title>
<meta name="description" content="管理画面ツール　街名編集">
<meta http-equiv="refresh" content="0;URL=area.php">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body class="drawer drawer--left">
</body>

</html>