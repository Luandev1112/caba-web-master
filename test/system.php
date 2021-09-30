<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>テスト</title>
<meta name="description" content="">
<meta name="keywords" content="">

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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

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
					<div class="wrapper" style="padding-top: 20px;">
						<div class="element_system">
							<table>
								<tr>
									<td class="t_td_top" colspan="2">
										1time 45min
									</td>
								</tr>
								<tr>
									<td class="t_td_1">
										ALL TIME
									</td>
									<td class="t_td_2">
										￥5,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										指名料
									</td>
									<td class="t_td_2">
										￥1,500
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										お一人様料金
									</td>
									<td class="t_td_2">
										+￥1,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										TAX・サービス料
									</td>
									<td class="t_td_2">
										10%
									</td>									
								</tr>								
							</table>
						</div>
						<div class="element_system">
							<table>
								<tr>
									<td class="t_td_top" colspan="2">
										1time 90min
									</td>
								</tr>
								<tr>
									<td class="t_td_1">
										ALL TIME
									</td>
									<td class="t_td_2">
										￥9,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										指名料
									</td>
									<td class="t_td_2">
										￥3,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										お一人様料金
									</td>
									<td class="t_td_2">
										+￥2,000
									</td>									
								</tr>
								<tr>
									<td class="t_td_1">
										TAX・サービス料
									</td>
									<td class="t_td_2">
										10%
									</td>									
								</tr>								
							</table>
						</div>
						<div class="element_system">
							<table>
								<tr>
									<td class="t_td_top" colspan="2">
										V.I.P
									</td>
								</tr>
								<tr>
									<td class="t_td_1">
										TAX・サービス料
									</td>
									<td class="t_td_2">
										20%
									</td>									
								</tr>								
							</table>
						</div>						
					</div>
					<div class="system_page_base">
						<div class="element_system">
							<h3>OTHER</h3>
							<div class="system_page_base_box">
								※各種クレジットカードご利用頂けます。
								<br />
								<img src="" data-src="img/card.png" class="lozad" alt="" >
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