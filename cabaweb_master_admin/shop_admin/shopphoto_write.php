<?php
//設定ファイル読み込み
require_once('../conf.php');

$master_id = $_POST['master_id'];

//フォームからの生データ
$id = $_POST['id'];
$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = htmlspecialchars($_POST['name2'] , ENT_QUOTES);
$photo1 = $_POST['photo1'];
$photo2 = $_POST['photo2'];
$photo3 = $_POST['photo3'];
$photo4 = $_POST['photo4'];
$photo5 = $_POST['photo5'];
$photo6 = $_POST['photo6'];
$photo7 = $_POST['photo7'];
$photo8 = $_POST['photo8'];
$photo9 = $_POST['photo9'];
$photo10 = $_POST['photo10'];
$photo11 = $_POST['photo11'];
$photo12 = $_POST['photo12'];
$photo13 = $_POST['photo13'];
$photo14 = $_POST['photo14'];
$photo15 = $_POST['photo15'];
$photo16 = $_POST['photo16'];
$link1 = $_POST['link1'];
$link2 = $_POST['link2'];
$link3 = $_POST['link3'];
$link4 = $_POST['link4'];
$link5 = $_POST['link5'];
$link6 = $_POST['link6'];
$link7 = $_POST['link7'];
$link8 = $_POST['link8'];
$link9 = $_POST['link9'];
$link10 = $_POST['link10'];
$edittime = $_POST['edittime'];

//編集・削除キー
$operation = $_POST['operation'];


//}
//}


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店内写真確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　店内写真確認">
<meta http-equiv="refresh" content="0;URL=shopphoto.php?master_id=<?php echo $master_id; ?>">

</head>

<body>
	
</body>

</html>