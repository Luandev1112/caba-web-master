<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

//データ受け取り
$toshi_id=$_POST["toshi_id"];
$toshi_name=htmlspecialchars($_POST['toshi_name'] , ENT_QUOTES);
$toshi_color = $_POST['toshi_color'];
$toshi_color2 = $_POST['toshi_color2'];
$toshi_area=$_POST["toshi_area"];

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規エリア登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規エリア登録">

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
				<h2>新規エリア登録確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="area_write.php" method="post" id="form">
							<p>
								<label><span>都道府県（<font color="#FF0000">必須</font>）</span>
									<?php
	if ($toshi_area == '1') {
	echo "群馬エリア";
}
	if ($toshi_area == '2') {
	echo "栃木エリア";
}
		if ($toshi_area == '3') {
	echo "埼玉エリア";
}
		if ($toshi_area == '4') {
	echo "長野エリア";
}
		if ($toshi_area == '5') {
	echo "富山エリア";
}
		if ($toshi_area == '6') {
	echo "新潟エリア";
}
		if ($toshi_area == '7') {
	echo "石川エリア";
}
		if ($toshi_area == '8') {
	echo "東京エリア";
}
		if ($toshi_area == '9') {
	echo "山梨エリア";
}
		if ($toshi_area == '10') {
	echo "神奈川エリア";
}
		if ($toshi_area == '11') {
	echo "熊本エリア";
}
		if ($toshi_area == '12') {
	echo "千葉エリア";
}
		if ($toshi_area == '13') {
	echo "愛知エリア";
}
		?>
								</label>
							</p>							
							<p>
								<label><span>都市名（<font color="#FF0000">必須</font>）</span><?php echo $toshi_name; ?></label>
							</p>																				
							
							<div class="under_button_area_2"><input type="hidden" name="toshi_name" value="<?php echo $toshi_name; ?>">
<input type="hidden" name="toshi_area" value="<?php echo $toshi_area; ?>">
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