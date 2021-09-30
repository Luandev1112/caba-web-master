<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース｜キャバクラ「きゃばWEB」</title>
<meta name="description" content="キャバクラ「きゃばWEB」の公式ホームページです。">
<meta name="keywords" content="キャバクラ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">	
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:600&display=swap" rel="stylesheet">

<link rel="canonical" href="hotnews.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>NEWS<br /><span style="font-size: 50%;">ニュース</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="news_page_base">
						<span id="1" class="link"></span>
						<div class="news_page_box">
							<a href="img/top1.jpg" data-fancybox="" data-caption="">
								<div class="photo_thumbs"><img src="" data-src="img/top1.jpg" class="lozad"></div>
							</a>
							<div class="news_page_box_title">ホームページ開設しました！</div>
							<div class="news_page_box_naiyou">img/top1.jpg
								オフィシャルサイトがオープンしました！<br />
								最新情報を更新していきます!<br />
								<br />
								お気に入り登録お願いします！
							</div>
						</div>
						<span id="2" class="link"></span>
						<div class="news_page_box">
							<a href="img/top2.jpg" data-fancybox="" data-caption="">
								<div class="photo_thumbs"><img src="" data-src="img/top2.jpg" class="lozad"></div>
							</a>
							<div class="news_page_box_title">グランドオープン！</div>
							<div class="news_page_box_naiyou">
								駅前にガールズバーが今月オープン！<br />
								是非、ご来店下さい！
							</div>
						</div>
						<span id="3" class="link"></span>
						<div class="news_page_box">
							<a href="img/top3.jpg" data-fancybox="" data-caption="">
								<div class="photo_thumbs"><img src="" data-src="img/top3.jpg" class="lozad"></div>
							</a>
							<div class="news_page_box_title">オープニングキャスト大募集中です！</div>
							<div class="news_page_box_naiyou">
								オープニングキャスト大募集中です！<br />
								みんなゼロからのスタート！<br />
								<br />
								未経験者大歓迎です！！
							</div>
							<div class="top_button_area"><a href="recruit.php" class="btn_under" title="詳細を見る">詳細を見る</a></div>							
						</div>
						<span id="4" class="link"></span>
						<div class="news_page_box">
							<a href="img/top5.jpg" data-fancybox="" data-caption="">
								<div class="photo_thumbs"><img src="" data-src="img/top5.jpg" class="lozad"></div>
							</a>
							<div class="news_page_box_title">働くママも安心して働けます！</div>
							<div class="news_page_box_naiyou">
								当店はママでも安心して働ける環境が整ってます！<br />
								託児所も完備!!<br />
								<br />
								是非、お気軽にお問い合わせ下さい。
							</div>
							<div class="top_button_area"><a href="recruit.php" class="btn_under" title="詳細を見る">詳細を見る</a></div>
						</div>
						
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
<!-- 読み込み -->
<script src="js/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
	$('[data-fancybox]').fancybox({
		loop : true,
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false
		}
	});
});
</script>	
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>	
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page_top');	
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