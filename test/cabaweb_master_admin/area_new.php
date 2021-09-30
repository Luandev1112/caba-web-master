<!doctype html>
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
				<h2>新規エリア登録</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="" method="post" id="form">
							<p>
								<label><span>都道府県（<font color="#FF0000">必須</font>）</span>
									<select name="都道府県" required>
										<option value="">選択してください</option>
										<option value="北海道">北海道</option>
										<option value="青森県">青森県</option>
										<option value="岩手県">岩手県</option>
										<option value="宮城県">宮城県</option>
										<option value="秋田県">秋田県</option>
										<option value="山形県">山形県</option>
										<option value="福島県">福島県</option>
										<option value="茨城県">茨城県</option>
										<option value="栃木県">栃木県</option>
										<option value="群馬県">群馬県</option>
										<option value="埼玉県">埼玉県</option>
										<option value="千葉県">千葉県</option>
										<option value="東京都">東京都</option>
										<option value="神奈川県">神奈川県</option>
										<option value="新潟県">新潟県</option>
										<option value="富山県">富山県</option>
										<option value="石川県">石川県</option>
										<option value="福井県">福井県</option>
										<option value="山梨県">山梨県</option>
										<option value="長野県">長野県</option>
										<option value="岐阜県">岐阜県</option>
										<option value="静岡県">静岡県</option>
										<option value="愛知県">愛知県</option>
										<option value="三重県">三重県</option>
										<option value="滋賀県">滋賀県</option>
										<option value="京都府">京都府</option>
										<option value="大阪府">大阪府</option>
										<option value="兵庫県">兵庫県</option>
										<option value="奈良県">奈良県</option>
										<option value="和歌山県">和歌山県</option>
										<option value="鳥取県">鳥取県</option>
										<option value="島根県">島根県</option>
										<option value="岡山県">岡山県</option>
										<option value="広島県">広島県</option>
										<option value="山口県">山口県</option>
										<option value="徳島県">徳島県</option>
										<option value="香川県">香川県</option>
										<option value="愛媛県">愛媛県</option>
										<option value="高知県">高知県</option>
										<option value="福岡県">福岡県</option>
										<option value="佐賀県">佐賀県</option>
										<option value="長崎県">長崎県</option>
										<option value="熊本県">熊本県</option>
										<option value="大分県">大分県</option>
										<option value="宮崎県">宮崎県</option>
										<option value="鹿児島県">鹿児島県</option>
										<option value="沖縄県">沖縄県</option>
									</select>
								</label>
							</p>							
							<p>
								<label><span>都市名（<font color="#FF0000">必須</font>）</span><input type="text" name="エリア名" class="txtfiled" placeholder="店舗名" required></label>
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