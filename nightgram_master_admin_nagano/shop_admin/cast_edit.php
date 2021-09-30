<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	//ファンクションファイル読み込み
require_once '../parts/function.php';

$name2 = $_GET['name2'];

$result=mysqli_query($sql2, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu2.php');
include('../parts/schetime.php');
}

$result=mysqli_query($sql3, "SELECT * From `shop` WHERE `login_id` = '$yobi1'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu_shop.php');
}

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `data5` = '$yobi1'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト編集｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト編集">

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
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">キャスト編集</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="cast_rewrite.php" method="post" id="form">
							<input type="hidden" name="id" value="<?php echo $id; ?>"><input type="hidden" name="name2" value="<?php echo $name2; ?>"><input type="hidden" name="profinfo11" value="<?php echo $profinfo11; ?>">
							
							<p>
								<label><span>お名前（<font color="#FF0000">必須</font>）</span><input type="text" name="name" class="txtfiled" placeholder="例）ゆうこ" value="<?php echo $name; ?>" required></label>
							</p>
			
							<div class="cast_touroku_area">
								<h3>SNS</h3>
								<p>
									<label><span>Instagram URL</span><input type="url" name="profinfo9" class="txtfiled" placeholder="例）Instagram URL" value="<?php echo $profinfo9; ?>"></label>
								</p>
								<p>
									<label><span>Instagram RSS</span><input type="url" name="option2" class="txtfiled" placeholder="例）Instagram RSS" value="<?php echo $option2; ?>"></label>
								</p>
								<p>
									<label><span>You Tube URL</span><input type="url" name="option3" class="txtfiled" placeholder="例）You Tube URL" value="<?php echo $option3; ?>"></label>
								</p>
								<p>
									<label><span>You Tube RSS</span><input type="url" name="option4" class="txtfiled" placeholder="例）You Tube RSS" value="<?php echo $option4; ?>"></label>
								</p>
								<p>
									<label><span>Twitter URL</span><input type="url" name="profinfo10" class="txtfiled" placeholder="例）Twitter URL" value="<?php echo $profinfo10; ?>"></label>
								</p>
								<p>
									<label><span>Tik Tok URL</span><input type="url" name="option5" class="txtfiled" placeholder="例）Tik Tok URL" value="<?php echo $option5; ?>"></label>
								</p>																
							</div>
<input type="hidden" name="operation" value="edit" />
							<input type="hidden" name="no" value="<?php echo $no; ?>" />
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>		
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