<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = htmlspecialchars($_POST['name2'] , ENT_QUOTES);


//[']を除去  SQL用追加
$name = str_replace('\'' , '' , $name);
$name2 = str_replace('\'' , '' , $name2);

//編集・削除キー
$operation = $_POST['operation'];

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `data5` SET `id`='$id',`name`='$name',`name2`='$name2',`link1`='$link1',`link2`='$link2',`link3`='$link3',`link4`='$link4',`link5`='$link5',`link6`='$link6',`link7`='$link7',`link8`='$link8',`link9`='$link9',`link10`='$link10',`edittime`='$edittime' WHERE `name2` LIKE '$name2' LIMIT 1");
		
		mysqli_query($sql, "UPDATE `data7` SET `id`='$id',`name`='$name',`name2`='$name2',`link1`='$link1',`link2`='$link2',`link3`='$link3',`link4`='$link4',`link5`='$link5',`link6`='$link6',`link7`='$link7',`link8`='$link8',`link9`='$link9',`link10`='$link10',`edittime`='$edittime' WHERE `name2` LIKE '$name2' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `data5` WHERE name2 LIKE '$name2' LIMIT 1");
	}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規グループ登録｜Admin Tool</title>
<meta http-equiv="refresh" content="0;URL=group.php">
</head>

<body>

<div class="drawer drawer--left">

</main>

</div><!--drawer drawer--left-->

</body>

</html>