<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>イベント確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　イベント確認">

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
			<h2>イベント確認</h2>
			<div class="page_base_in">
				<div class="page_base_box_2">
					<div class="attention_1">
						最後に必ず「登録」ボタンを押して下さい。<br />
						「登録」ボタンを押さないと反映されません。
					</div>
					<form action="hotnews_check.php" method="post" id="form" enctype="multipart/form-data">
						<p>
							<label>
								<span>■イベントカテゴリ</span>
								<span style="font-size: 80%; color: #4D4D4D;">Birthday</span>
							</label>
						</p>
						<p>
							<label>
								<span>■イベント日</span>
								<span style="font-size: 80%; color: #4D4D4D;">2020-05-30</span>
							</label>
						</p>						
						<p>
							<label>
								<span>■タイトル</span>
								<span style="font-size: 80%; color: #4D4D4D;">タイトルが入ります。タイトルが入ります。</span>
							</label>
						</p>
						<p>
							<label>
								<span>■内容</span>
								<span style="font-size: 80%; color: #4D4D4D;">
									内容が入ります。内容が入ります。<br />
									内容が入ります。内容が入ります。
								</span>
							</label>
						</p>
						<input type="hidden" name="news_id" value="<?php echo strtotime("now"); ?>" />
						<input type="hidden" name="blank" value="<?php echo $shop_id; ?>" />
						<input type="hidden" name="hotnews" value="<?php echo $portal; ?>" />
						<input name="n_area" type="hidden" class="w_per50" value="<?php echo $area; ?>" />
						<input name="n_area2" type="hidden" class="w_per50" value="<?php echo $area2; ?>" />
						<input name="n_gyoushu" type="hidden" class="w_per50" value="<?php echo $gyoushu; ?>" />
						<input name="end" type="hidden" class="w_per50" value="<?php echo $hyouji; ?>" />
						<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>" />
						<div class="under_button_area_2">
							<button type="submit" class="formbtn_2">登録する</button>
						</div>
					</form>
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