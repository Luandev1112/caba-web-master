<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

//フォームからデータ受け取り
$info_id = $_GET['info_id'];
//編集・削除キー
$operation = "delete";

//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `information` SET `info_id`='$info_id',`info_time`='$info_time',`info_title`='$info_title',`info_machi`='$info_machi',`info_shop`='$info_shop',`info_naiyou`='$info_naiyou',`info_text`='$info_text',`info_select`='$info_select',`info_blank`='$info_blank' WHERE `info_id` LIKE '$info_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `information` WHERE info_id LIKE '$info_id' LIMIT 1");
	}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>運営からの情報を編集｜マスター管理</title>

<meta http-equiv="refresh" content="0;URL=information_2.php">
<link rel="shortcut icon" href="img/favicon.ico">

<meta name="robots" content="noindex,nofollow">

</head>

<body class="drawer drawer--left">

</body>

</html>