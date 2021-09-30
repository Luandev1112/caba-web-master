<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>顧客情報｜Admin Tool</title>
<meta name="description" content="管理画面ツール　顧客情報">

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
				<h2>顧客情報</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="" method="post" id="form">
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗名" class="txtfiled" placeholder="店舗名" required></label>
							</p>
							<p>
								<label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><input pattern="^[ァ-ン]+$" title="全角カタカナでご入力ください。" type="text" name="店舗名フリガナ" class="txtfiled" placeholder="店舗名フリガナ" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
								<label><span>店舗URL（<font color="#FF0000">必須</font>）</span><input type="url" name="店舗URL" class="txtfiled" placeholder="店舗URL" required></label>
							</p>
							<p>
								<label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="店舗 ID" class="txtfiled" placeholder="店舗 ID" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="店舗 PASS" class="txtfiled" placeholder="店舗 PASS" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字<br />
								</span>								
							</p>							
							<p>
								<label><span>エリア（<font color="#FF0000">必須</font>）</span>
									<select name="エリア" required>
										<option value="--">--</option>
										<option value="前橋市">前橋市</option>
										<option value="高崎市">高崎市</option>
										<option value="伊勢崎市">伊勢崎市</option>
										<option value="太田市">太田市</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗住所" class="txtfiled" placeholder="店舗住所" required></label>
							</p>
							<p>
								<label><span>電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="電話番号" class="txtfiled" placeholder="電話番号" required></label>
							</p>
							<p>
								<label><span>メールアドレス（<font color="#FF0000">必須</font>）</span><input type="email" name="メールアドレス" class="txtfiled" placeholder="メールアドレス" required></label>
							</p>
							<p>
								<label><span>代表者名（<font color="#FF0000">必須</font>）</span><input type="text" name="代表者名" class="txtfiled" placeholder="代表者名" required></label>
							</p>
							<p>
								<label><span>次回契約日（<font color="#FF0000">必須</font>）</span><input type="date" name="start" id="today" required><br /></label>
							</p>
							<p>
								<label><span>契約形態（<font color="#FF0000">必須</font>）</span>
									<select name="契約形態" required>
										<option value="初回 1年契約">初回 1年契約</option>
										<option value="2年目以降 1年契約">2年目以降 1年契約</option>
										<option value="2年目以降 1ヶ月契約">2年目以降 1ヶ月契約</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>お支払い方法（<font color="#FF0000">必須</font>）</span>
									<select name="お支払い方法" required>
										<option value="銀行振込">銀行振込</option>
										<option value="クレジットカード">クレジットカード</option>
									</select>
								</label>
							</p>							
							<p>
								<label><span>クーポンページの有無（<font color="#FF0000">必須</font>）</span>
									<select name="クーポンページの有無" required>
										<option value="なし">なし</option>
										<option value="あり">あり</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>スライダー、背景画像の選択（<font color="#FF0000">必須</font>）</span>
									<select name="スライダー、背景画像の選択" required>
										<option value="スライダー">スライダー</option>
										<option value="背景画像">背景画像</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>ナイトグラムとの連動（<font color="#FF0000">必須</font>）</span>
									<select name="ナイトグラムとの連動" required>
										<option value="なし">なし</option>
										<option value="あり">あり</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>グループ設定（<font color="#FF0000">必須</font>）</span>
									<select name="グループ設定" required>
										<option value="なし">なし</option>
										<option value="あり">あり</option>
									</select>
								</label>
							</p>							
							<p>
								<label><span>グループID（<font color="#FF0000">グループと連動する場合</font>）</span><input type="text" name="グループID" class="txtfiled" placeholder="グループID"></label>
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