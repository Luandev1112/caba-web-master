<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>料金システム｜キャバクラ「きゃばWEB」</title>
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

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:700&display=swap" rel="stylesheet">

<link rel="canonical" href="system.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--right">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>SYSTEM<br /><span style="font-size: 50%;">料金システム</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="wrapper">
						<div class="element_system">
							<table>
								<tr>
									<td class="t_td_top" colspan="2">
										1time 50min
									</td>
								</tr>
								<tr>
									<td class="t_td_1">
										19:00-20:30
									</td>
									<td class="t_td_2">
										￥4,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										20:30-21:30
									</td>
									<td class="t_td_2">
										￥5,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										21:30-LAST
									</td>
									<td class="t_td_2">
										￥6,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										指名料
									</td>
									<td class="t_td_2">
										￥2,000
									</td>									
								</tr>								
							</table>
						</div>
						<div class="element_system">
							<table>
								<tr>
									<td class="t_td_top" colspan="2">
										OTHER
									</td>
								</tr>
								<tr>
									<td class="t_td_1">
										VIP
									</td>
									<td class="t_td_2">
										+￥1,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										EXECUTIVE ROOM
									</td>
									<td class="t_td_2">
										+￥10,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										お一人様
									</td>
									<td class="t_td_2">
										+￥1,000
									</td>									
								</tr>								
							</table>
						</div>						
					</div>
					<div class="system_page_base">
						<h3>FREE DRINK</h3>
						<div class="system_page_base_box">
							焼酎・ウィスキー・ブランデー・生ビール・ハイボール・ソフトドリンク<br />
							<br />
							※別途消費税が掛かります。<br />
							※各種クレジットカードご利用頂けます。<br />
							（カード手数料は掛かりません。）<br />
							<img src="" data-src="img/card.png" class="lozad" alt="" >
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