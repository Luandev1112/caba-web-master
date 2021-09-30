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

$result=mysqli_query($sql, "SELECT * From `toshi_tb`");

mysqli_query($sql, "INSERT INTO `toshi_tb` VALUES ('$toshi_id','$toshi_name','$toshi_color','$toshi_color2','$toshi_area')");

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規街名登録｜Admin Tool</title>
	<meta http-equiv="refresh" content="0;URL=area.php">
<meta name="description" content="管理画面ツール　新規街名登録">

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