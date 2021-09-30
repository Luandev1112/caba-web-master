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
$n_link = $_POST['n_link'];
$sort_order = $_POST['sort_order'];


$result=mysqli_query($sql3, "SELECT * From `news`");
mysqli_query($sql3, "INSERT INTO `news` VALUES ('$news_id','$start','$sort','$end','$sort2','$time','$newstitle','$input','$photo1','$jpeg','$link','$blank','$hotnews','$photo_box','$n_area','$n_area2','$n_gyoushu','$n_link','$news_no','$sort_order')");

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `login_id` = '$blank'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　ニュース確認">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">
<meta http-equiv="refresh" content="0;URL=hotnews.php?master_id=<?php echo $master_id; ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	
	
</body>
</html>