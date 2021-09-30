<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト確認">

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
				<h2>キャスト確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="" method="post" id="form">
							<p>
								<label>
									<span>■お名前</span><br />
									<span style="font-size: 80%; color: #4D4D4D;">名前が入ります。</span>
								</label>
							</p>
							<p>
								<label>
									<span>■年齢</span>
									<span style="font-size: 80%; color: #4D4D4D;">20歳</span>
								</label>
							</p>
							<p>
								<label>
									<span>■お誕生日</span>
									<span style="font-size: 80%; color: #4D4D4D;">1999年8月20日</span>
								</label>
							</p>
							<p>
								<label>
									<span>■血液型</span>
									<span style="font-size: 80%; color: #4D4D4D;">A型</span>
								</label>
							</p>
							<p>
								<label>
									<span>■出身地</span>
									<span style="font-size: 80%; color: #4D4D4D;">群馬</span>
								</label>
							</p>
							<p>
								<label>
									<span>■趣味・特技</span>
									<span style="font-size: 80%; color: #4D4D4D;">料理・スノボ</span>
								</label>
							</p>
							<p>
								<label>
									<span>■好みのタイプ</span>
									<span style="font-size: 80%; color: #4D4D4D;">優しい人</span>
								</label>
							</p>
							<p>
								<label>
									<span>■好きな食べ物</span>
									<span style="font-size: 80%; color: #4D4D4D;">焼き肉</span>
								</label>
							</p>
							<p>
								<label>
									<span>■好きなブランド</span>
									<span style="font-size: 80%; color: #4D4D4D;">ヴィトン</span>
								</label>
							</p>
							<p>
								<label>
									<span>■チャームポイント</span>
									<span style="font-size: 80%; color: #4D4D4D;">目</span>
								</label>
							</p>
							
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