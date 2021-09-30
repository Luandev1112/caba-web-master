<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
//設定ファイル読み込み
	require_once '../conf.php';
	
$id = $_GET['id'];

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `master_news` WHERE `id` = '$id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu9.php');
}


$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}




?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>運営からのお知らせ｜Admin Tool</title>
<meta name="description" content="管理画面ツール　運営からのお知らせ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

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
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_base">
				<h2>運営からのお知らせ</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<h3>お知らせ詳細</h3>
						<div class="osirase_page_base">
							<div class="osirase_page_ymd">更新日：<?php echo date("Y年m月d日",strtotime("$time")); ?></div>
							<div class="osirase_page_title"><?php echo $newstitle; ?></div>
							<div class="osirase_page_naiyou">
								<?php echo $input; ?>
							</div>
						</div>
					</div>
				</div><!--base-->
			</div>
			<?php include ('php/footer.php'); ?>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<!--ヘッダー　プラグイン-->
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
<!--サイド　プラグイン-->	
</body>
</html>