<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>イベントカレンダー｜キャバクラ「きゃばWEB」</title>
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

<link rel="canonical" href="event.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--right">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>EVENT<br /><span style="font-size: 50%;">イベントカレンダー</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="event_page_base">
						<h3>March<br /><span style="font-size: 70%;">2020.3</span></h3>
						<table class="event_t">
							<tr>
								<td class="data">1</td>
								<td class="naiyou"></td>
							</tr>
							<tr>
								<td class="data">2</td>
								<td class="naiyou">
									<div class="calendar_page_icon" style="color: #ED367A;">誕生日</div>
									<div class="calendar_page_title"><a href="event_info.php" title="イベント詳細">あいちゃん誕生日</a></div>                
								</td>
							</tr>
							<tr class="sat">
								<td class="data">3</td>
								<td class="naiyou">               
								</td>
							</tr>
							<tr class="sun">
								<td class="data">4</td>
								<td class="naiyou">
									<div class="calendar_page_icon" style="color: #FF0000;">店休日</div>
									<div class="calendar_page_title"><a href="event_info.php" title="イベント詳細">店休日</a></div>
								</td>
							</tr>
							<tr>
								<td class="data">5</td>
								<td class="naiyou"></td>
							</tr>
							<tr>
								<td class="data">6</td>
								<td class="naiyou"></td>
							</tr>
							<tr class="sat">
								<td class="data">7</td>
								<td class="naiyou">
									<div class="calendar_page_icon" style="color: #4043D1;">イベント</div>
									<div class="calendar_page_title"><a href="event_info.php" title="イベント詳細">コスプレDay</a></div>
								</td>
							</tr>
							<tr class="sun">
								<td class="data">8</td>
								<td class="naiyou">
									<div class="calendar_page_icon" style="color: #FF0000;">店休日</div>
									<div class="calendar_page_title"><a href="event_info_2.php" title="イベント詳細">店休日ああああああああああああああああああああああああ</a></div>
								</td>
							</tr>
							<tr>
								<td class="data">9</td>
								<td class="naiyou"></td>
							</tr>
						</table>
						<div class="event_back"><a href="" class="btn_event">＜＜ 2月</a></div>
						<div class="event_next"><a href="" class="btn_event">4月 ＞＞</a></div>
						<div class="clear"></div>
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