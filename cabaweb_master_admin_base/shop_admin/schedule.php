<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>当日出勤設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　当日出勤設定">

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
			<h2>当日出勤設定</h2>
			<div class="page_base_in">
				<div class="page_base_box">
					<h3>体験入店者数の設定</h3>
					<div class="button_area_2"><a href="taiken.php" class="btn_main">体験人数を設定する</a></div>
				</div>
				<div class="page_base_box_2">				
					<h3>出勤を設定</h3>
					<div class="attention_1">
						最後に必ず「登録」ボタンを押して下さい。<br />
						「登録」ボタンを押さないと反映されません。<br />
						<br />
						※出勤は朝5:00にリセットされます。
					</div>
					
					<form action="" method="post">
						<div class="wrapper">
							<div class="element_cast">
								<div class="top_cast_box">
									<div class="top_cast_box_in">
										<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
										<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>
										<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>
										<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>
										<p>なな</p>
									</div>
									<div class="top_cast_box_button">
										<div class="top_cast_hyouji">公開中</div>
										<div class="top_cast_box_button_a">
											<div class="todayscast_box_1">
												<p><input type="radio" name="radio_1" class="radio-input_2" id="radio-01" value="お休み" checked="checked"><label for="radio-01">お休み</label></p>
											</div>
										</div>
										<div class="top_cast_box_button_a">
											<div class="todayscast_box_2">
												<p><input type="radio" name="radio_1" class="radio-input_2" id="radio-02" value="出勤" checked="checked"><label for="radio-02">出勤</label></p>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="element_cast">
								<div class="top_cast_box">
									<div class="top_cast_box_in">
										<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
										<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>
										<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>
										<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>
										<p>なな</p>
									</div>
									<div class="top_cast_box_button">
										<div class="top_cast_hyouji_no">非公開</div>
										<div class="top_cast_box_button_a">
											<div class="todayscast_box_1">
												<p><input type="radio" name="radio_2" class="radio-input_2" id="radio-03" value="お休み" checked="checked"><label for="radio-03">お休み</label></p>
											</div>
										</div>
										<div class="top_cast_box_button_a">
											<div class="todayscast_box_2">
												<p><input type="radio" name="radio_2" class="radio-input_2" id="radio-04" value="出勤" checked="checked"><label for="radio-04">出勤</label></p>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>							
							<div class="element_cast">
								<div class="top_cast_box">
									<div class="top_cast_box_in">
										<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
										<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>
										<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>
										<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>
										<p>なな</p>
									</div>
									<div class="top_cast_box_button">
										<div class="top_cast_hyouji">公開中</div>
										<div class="top_cast_box_button_a">
											<div class="todayscast_box_1">
												<p><input type="radio" name="radio_3" class="radio-input_2" id="radio-05" value="お休み" checked="checked"><label for="radio-05">お休み</label></p>
											</div>
										</div>
										<div class="top_cast_box_button_a">
											<div class="todayscast_box_2">
												<p><input type="radio" name="radio_3" class="radio-input_2" id="radio-06" value="出勤" checked="checked"><label for="radio-06">出勤</label></p>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="under_button_area_2">
							<button type="submit" class="formbtn_2">出勤を送信</button>
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