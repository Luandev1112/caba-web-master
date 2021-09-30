<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからデータ受け取り
$news_id = $_POST['news_id'];
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
$blank = $_POST['blank'];
$photo_box = $_POST['photo_box'];
$hotnews = $_POST['hotnews'];
$n_area = $_POST['n_area'];
$n_area2 = $_POST['n_area2'];
$n_gyoushu = $_POST['n_gyoushu'];
$news_no = $_POST['news_no'];
$n_link = $_POST['n_link'];

if($photo1 !=''){
	$photo_box = "1";
}

$result=mysqli_query($sql, "SELECT * From `news`");
mysqli_query($sql, "INSERT INTO `news` VALUES ('$news_id','$start','$sort','$end','$sort2','$time','$newstitle','$input','$photo1','$jpeg','$link','$blank','$hotnews','$photo_box','$n_area','$n_area2','$n_gyoushu','$n_link','$news_no','$sort_order')");
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=hotnews.php?shop_id=<?php echo $blank; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>