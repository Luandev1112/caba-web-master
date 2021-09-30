<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

//データ受け取り
$off_toshi_id=$_POST["off_toshi_id"];
$off_toshi_name=htmlspecialchars($_POST['off_toshi_name'] , ENT_QUOTES);
$off_toshi_color = $_POST['off_toshi_color'];
$off_toshi_color2 = $_POST['off_toshi_color2'];
$off_toshi_area=$_POST["off_toshi_area"];



?><!doctype html>
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
						<form action="area_write.php" method="post" id="form">
							<p>
								<label><span>都道府県（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($off_toshi_area == '1') {
	$kenhyouki = '北海道';
}elseif ($off_toshi_area == '2') {
	$kenhyouki = '青森';
}elseif ($off_toshi_area == '3') {
	$kenhyouki = '岩手';
}elseif ($off_toshi_area == '4') {
	$kenhyouki = '宮城県';
}elseif ($off_toshi_area == '5') {
	$kenhyouki = '秋田県';
}elseif ($off_toshi_area == '6') {
	$kenhyouki = '山形県';
}elseif ($off_toshi_area == '7') {
	$kenhyouki = '福島県';
}elseif ($off_toshi_area == '8') {
	$kenhyouki = '茨城県';
}elseif ($off_toshi_area == '9') {
	$kenhyouki = '栃木県';
}elseif ($off_toshi_area == '10') {
	$kenhyouki = '群馬県';
}elseif ($off_toshi_area == '11') {
	$kenhyouki = '埼玉県';
}elseif ($off_toshi_area == '12') {
	$kenhyouki = '千葉県';
}elseif ($off_toshi_area == '13') {
	$kenhyouki = '東京都';
}elseif ($off_toshi_area == '14') {
	$kenhyouki = '神奈川県';
}elseif ($off_toshi_area == '15') {
	$kenhyouki = '新潟県';
}elseif ($off_toshi_area == '16') {
	$kenhyouki = '富山県';
}elseif ($off_toshi_area == '17') {
	$kenhyouki = '石川県';
}elseif ($off_toshi_area == '18') {
	$kenhyouki = '福井県';
}elseif ($off_toshi_area == '19') {
	$kenhyouki = '山梨県';
}elseif ($off_toshi_area == '20') {
	$kenhyouki = '長野県';
}elseif ($off_toshi_area == '21') {
	$kenhyouki = '岐阜県';
}elseif ($off_toshi_area == '22') {
	$kenhyouki = '静岡県';
}elseif ($off_toshi_area == '23') {
	$kenhyouki = '愛知県';
}elseif ($off_toshi_area == '24') {
	$kenhyouki = '三重県';
}elseif ($off_toshi_area == '25') {
	$kenhyouki = '滋賀県';
}elseif ($off_toshi_area == '26') {
	$kenhyouki = '京都府';
}elseif ($off_toshi_area == '27') {
	$kenhyouki = '大阪府';
}elseif ($off_toshi_area == '28') {
	$kenhyouki = '兵庫県';
}elseif ($off_toshi_area == '29') {
	$kenhyouki = '奈良県';
}elseif ($off_toshi_area == '30') {
	$kenhyouki = '和歌山県';
}elseif ($off_toshi_area == '31') {
	$kenhyouki = '鳥取県';
}elseif ($off_toshi_area == '32') {
	$kenhyouki = '島根県';
}elseif ($off_toshi_area == '33') {
	$kenhyouki = '岡山県';
}elseif ($off_toshi_area == '34') {
	$kenhyouki = '広島県';
}elseif ($off_toshi_area == '35') {
	$kenhyouki = '山口県';
}elseif ($off_toshi_area == '36') {
	$kenhyouki = '徳島県';
}elseif ($off_toshi_area == '37') {
	$kenhyouki = '香川県';
}elseif ($off_toshi_area == '38') {
	$kenhyouki = '愛媛県';
}elseif ($off_toshi_area == '39') {
	$kenhyouki = '高知県';
}elseif ($off_toshi_area == '40') {
	$kenhyouki = '福岡県';
}elseif ($off_toshi_area == '41') {
	$kenhyouki = '佐賀県';
}elseif ($off_toshi_area == '42') {
	$kenhyouki = '長崎県';
}elseif ($off_toshi_area == '43') {
	$kenhyouki = '熊本県';
}elseif ($off_toshi_area == '44') {
	$kenhyouki = '大分県';
}elseif ($off_toshi_area == '45') {
	$kenhyouki = '宮崎県';
}elseif ($off_toshi_area == '46') {
	$kenhyouki = '鹿児島県';
}elseif ($off_toshi_area == '47') {
	$kenhyouki = '沖縄県';
}
									echo $kenhyouki; 
									?>
								</label>
							</p>							
							<p>
								<label><span>都市名（<font color="#FF0000">必須</font>）</span><?php echo $off_toshi_name; ?></label>
							</p>																				
							 <input type="hidden" name="off_toshi_name" value="<?php echo $off_toshi_name; ?>">
<input type="hidden" name="off_toshi_area" value="<?php echo $off_toshi_area; ?>">
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