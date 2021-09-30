<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

$id = $_POST['id'];

$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = htmlspecialchars($_POST['name2'] , ENT_QUOTES);

$link1 = $_POST['link1'];

//[']を除去  SQL用追加
$name = str_replace('\'' , '' , $name);
$name2 = str_replace('\'' , '' , $name2);

$result=mysqli_query($sql, "SELECT * From `data5`");

mysqli_query($sql, "INSERT INTO `data5` VALUES ($id,'$name','$name2','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$photo10','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$end1','$end2','$end3','$end4','$end5','$end6','$end7','$end8','$end9','$end10','$edittime')");

$result=mysqli_query($sql, "SELECT * From `data7`");

mysqli_query($sql, "INSERT INTO `data7` VALUES ($id,'$name','$name2','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$photo10','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$end1','$end2','$end3','$end4','$end5','$end6','$end7','$end8','$end9','$end10','$edittime')");

?>
<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規グループ登録確認｜Admin Tool</title>
	<meta http-equiv="refresh" content="0;URL=group.php">
<meta name="description" content="管理画面ツール　新規グループ登録確認">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>

</body>

</html>