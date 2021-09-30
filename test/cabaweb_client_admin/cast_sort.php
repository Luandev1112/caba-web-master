<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト並び替え｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト並び替え">

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
			<h2>キャスト並び替え</h2>
			<div class="page_base_in">
				<div class="page_base_box_2">				
					<div class="attention_2">
						※移動させたいキャストをドラッグ＆ドロップをして、確定ボタンを必ず押して下さい。<br />
						<br />
						【やり方】<br />
						①移動させたいキャストをタップし続ける。<br />
						↓<br />
						②タップしたまま移動させたい場所まで動かす。<br />
						↓<br />
						③移動させたい場所で離す。<br />
						↓<br />
						④最後に確定ボタンを押す。
					</div>
					<ul id="cast_sort">
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>
						<li>
							<div class="top_news_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>								
								</div>
							</div>
						</li>						
					</ul>
					

				</div>
				<form action="sort.php" method="post">
					<input type="hidden" name="order" id="order" size=10 readonly>
					<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>" />
					<div class="under_button_area_2">
						<button name="submit" type="submit"	disabled="disabled" class="formbtn_2" id="submit" >順番を確定</button>
					</div>
				</form>
				
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