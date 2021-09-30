<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>お問合せ｜キャバクラ「きゃばWEB」</title>
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

<link rel="canonical" href="contact.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>CONTACT<br /><span style="font-size: 50%;">求人お問合せ</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="contact_page_box">
						<div class="wrapper_2">
							<div class="element_contact">
								<div class="contact_page_1 contact_pc"><img src="img/tel_2.svg">027-289-5688</div>
								<div class="contactpage_button"><a href="tel:027-289-5688" class="btn_tel" onclick="gtag('event', 'click', {'event_category': '電話ボタン','event_label': '求人電話','value': '1'});"><img src="img/tel_2.svg">027-289-5688</a></div>
							</div>
							<div class="element_contact">
								<div class="contact_page_1 contact_pc"><img src="img/mail_2.svg"><a href="mailto:info@monochrome-ds.com">info@monochrome-ds.com</a></div>
								<div class="contactpage_button"><a href="mailto:info@monochrome-ds.com" class="btn_tel" onclick="gtag('event', 'click', {'event_category': 'メールボタン','event_label': '求人メール','value': '1'});"><img src="img/mail_2.svg">info@monochrome-ds.com</a></div>
							</div>							
							<div class="element_contact">
								<div class="contact_page_1 contact_pc"><img src="img/line_2.svg"><a href="http://line.naver.jp/">lineid</a></div>
								<div class="contactpage_button"><a href="http://line.naver.jp/" class="btn_line" onclick="gtag('event', 'click', {'event_category': 'LINENボタン','event_label': '求人LINE','value': '1'});"><img src="img/line_2.svg">lineid</a></div>
							</div>
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