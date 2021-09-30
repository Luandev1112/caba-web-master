<?php
//設定ファイル読み込み
require_once('conf.php');

$master_id = $_POST['master_id'];

//フォームからデータ受け取り
$news_id = $_POST['news_id'];
$news_no = $_POST['news_no'];
$start = $_POST['start'];
$sort = $_POST['sort'];
$end = $_POST['end'];
$sort2 = $_POST['sort2'];
$time = $_POST['time'];
$newstitle = $_POST['newstitle'];
$input = $_POST['input'];
$photo1 = $_POST['photo1'];
$jpeg = $_POST['jpeg'];
$link = $_POST['link'];
$n_select = $_POST['n_select'];
$blank = $_POST['blank'];
$hotnews = $_POST['hotnews'];
$sort_order = $_POST['sort_order'];
$n_area = $_POST['n_area'];
$n_area2 = $_POST['n_area2'];
$n_gyoushu = $_POST['n_gyoushu'];
//編集・削除キー
$operation = $_POST['operation'];



//配列入れ替え

		mysqli_query($sql, "UPDATE `news` SET `news_id`='$news_id',`photo1`='$photo1',`jpeg`='$jpeg' WHERE `news_id` LIKE '$news_id' LIMIT 1");
	


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=hotnews.php?master_id=<?php echo $master_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>