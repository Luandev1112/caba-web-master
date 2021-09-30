<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$master_news_id = $_GET['master_news_id'];

$result=mysqli_query($sql, "SELECT * From `master_news` WHERE `master_news_id` = '$master_news_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu9.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>お知らせ編集｜Admin Tool</title>
<meta name="description" content="管理画面ツール　お知らせ編集">

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
				<h2>お知らせ編集</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="osirase_rewrite.php" method="post" id="form" enctype="multipart/form-data">
							<input type="hidden" name="master_news_id" value="<?php echo $master_news_id; ?>" />
<input type="hidden" name="sort" value="<?php echo $sort; ?>" />
<input type="hidden" name="sort2" value="<?php echo $sort2; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="hidden" name="blank" value="<?php echo $blank; ?>" />
<input type="hidden" name="end" value="<?php echo $end; ?>" />
		<input type="hidden" name="time" value="<?php echo $time; ?>" />
							<p>
								<label>
									<span>タイトル（<font color="#FF0000">必須</font>）</span>
									<input type="text" name="newstitle" class="txtfiled" placeholder="" value="<?php echo $newstitle; ?>"  required><br />
								</label>
							</p>
							<p>
								<label>
									<span>内容（<font color="#FF0000">必須</font>）</span><?php $input = str_replace("<br />" , "\r\n" , $input); ?><textarea name="input" class="txtfiled" rows="10" placeholder="" required><?php echo $input; ?></textarea><br />
									<span style="font-size:60%; color:#FF0000;">※絵文字を使用した場合、絵文字が反映されない場合があります。</span>
								</label>
							</p>
							<div class="todayscast_button_2"><input type="hidden" name="operation" value="edit" />
    <input name="jpeg" type="hidden" value="<?php echo $jpeg; ?>" />
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<?php include ('php/footer.php'); ?>
		</div>
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

</html>