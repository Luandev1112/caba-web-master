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
$info_id = $_POST['info_id'];
$info_time = $_POST['info_time'];
$info_title = $_POST['info_title'];
$info_machi = $_POST['info_machi'];
$info_shop = $_POST['info_shop'];
$info_naiyou = $_POST['info_naiyou'];
$info_text = htmlspecialchars($_POST['info_text'],ENT_QUOTES);
$info_select = $_POST['info_select'];
$info_blank = $_POST['info_blank'];
//データを整形
$info_text = mb_convert_kana($info_text,'KaV','utf-8');

//追加
$info_text = str_replace('\\' , '' , $info_text);
//改行コードの前に改行タグを入れる
$info_text = nl2br($info_text);
//改行コードを削除
$info_text = str_replace("\r\n" , "" , $info_text);

//編集・削除キー
$operation = $_POST['operation'];

//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `information` SET `info_id`='$info_id',`info_time`='$info_time',`info_title`='$info_title',`info_machi`='$info_machi',`info_shop`='$info_shop',`info_naiyou`='$info_naiyou',`info_text`='$info_text',`info_select`='$info_select',`info_blank`='$info_blank' WHERE `info_id` LIKE '$info_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `information` WHERE id LIKE '$id' LIMIT 1");
	}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title></title>

<meta http-equiv="refresh" content="0;URL=information_2.php">
<link rel="shortcut icon" href="img/favicon.ico">

<meta name="robots" content="noindex,nofollow">

</head>

<body class="drawer drawer--left">

</body>

</html>