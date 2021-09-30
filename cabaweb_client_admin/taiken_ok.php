<?php
//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

//ファンクションファイル読み込み
require_once '../cabaweb_master_admin/parts/function.php';

$master_id = $_POST['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}


//フォームからの生データ
$taiken_id = $_POST['taiken_id'];
$shop_no = $_POST['shop_no'];
$taiken_num = $_POST['taiken_num'];
$shop_id = $_POST['shop_id'];
//設定日の日付
$taiken_limit = $tdy;

mysqli_query($sql, "UPDATE `taiken` SET `taiken_id`='$taiken_id',`shop_no`='$shop_no',`taiken_num`='$taiken_num',`taiken_limit`='$taiken_limit' WHERE `shop_no` LIKE '$shop_no' LIMIT 1");


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>体験人数設定完了｜Admin Tool</title>
<meta name="description" content="管理画面ツール　体験人数設定完了">

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
			<div id="page_base">
				<h2>体験人数設定完了</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<h3>体験人数設定完了</h3>
						<div class="taiken_page_ok">
							<?php echo $day1; ?>(<?php echo $week1; ?>)の体験人数は<br />
							<span style="font-size: 120%; color: #1fb3a4;"><?php echo $taiken_num; ?>人</span>です。 
						</div>
					</div>
				</div>
			</div>
			<?php include ('php/footer.php'); ?>
		</div><!--drawer drawer--left-->
	</div>

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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>