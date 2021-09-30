<?php
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

//データ受け取り
$off_toshi_id=$_POST["off_toshi_id"];
$off_toshi_name=htmlspecialchars($_POST['off_toshi_name'] , ENT_QUOTES);
$off_toshi_color = $_POST['off_toshi_color'];
$off_toshi_color2 = $_POST['off_toshi_color2'];
$off_toshi_area=$_POST["off_toshi_area"];

$result=mysqli_query($sql, "SELECT * From `off_toshi_tb`");

mysqli_query($sql, "INSERT INTO `off_toshi_tb` VALUES ('$off_toshi_id','$off_toshi_name','$off_toshi_color','$off_toshi_color2','$off_toshi_area')");

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規エリア登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規エリア登録">
<meta http-equiv="refresh" content="0;URL=area.php">
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
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<?php include ('php/footer.php'); ?>
		</div>
	</div><!--drawer drawer--left-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>	
</body>

</html>