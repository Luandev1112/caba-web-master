<?php
//設定ファイル読み込み
require_once('conf.php');

$master_id = $_POST['master_id'];
//フォームからの生データ
$s_url = $_POST['s_url'];
$login_id = htmlspecialchars($_POST['login_id'] , ENT_QUOTES);
$login_pass = htmlspecialchars($_POST['login_pass'] , ENT_QUOTES);
$shop_name = htmlspecialchars($_POST['shop_name'] , ENT_QUOTES);
$shop_name2 = htmlspecialchars($_POST['shop_name2'] , ENT_QUOTES);
$s_area = $_POST['s_area'];
$daihyo = htmlspecialchars($_POST['daihyo'] , ENT_QUOTES);
$add = htmlspecialchars($_POST['add'] , ENT_QUOTES);
$shop_tell = $_POST['shop_tell'];
$mail = $_POST['mail'];
$time1 = $_POST['time1'];
$sdata1 = $_POST['sdata1'];
$sdata2 = $_POST['sdata2'];
$sdata3 = $_POST['sdata3'];
$sdata4 = $_POST['sdata4'];
$sdata5 = $_POST['sdata5'];
$sdata6 = $_POST['sdata6'];
$sdata7 = $_POST['sdata7'];
$sdata8 = $_POST['sdata8'];
$sdata9 = $_POST['sdata9'];
$sdata10 = $_POST['sdata10'];
$time2 = $_POST['time2'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$group_id = htmlspecialchars($_POST['group_id'] , ENT_QUOTES);
$portal = $_POST['portal'];

//文字コード変換
$s_url = mb_convert_encoding($s_url,'UTF-8','AUTO');
$login_id = mb_convert_encoding($login_id,'UTF-8','AUTO');
$login_pass = mb_convert_encoding($login_pass,'UTF-8','AUTO');
$shop_name = mb_convert_encoding($shop_name,'UTF-8','AUTO');
$shop_name2 = mb_convert_encoding($shop_name2,'UTF-8','AUTO');
$s_area = mb_convert_encoding($s_area,'UTF-8','AUTO');
$daihyo = mb_convert_encoding($daihyo,'UTF-8','AUTO');
$add = mb_convert_encoding($add,'UTF-8','AUTO');
$shop_tell = mb_convert_encoding($shop_tell,'UTF-8','AUTO');
$mail = mb_convert_encoding($mail,'UTF-8','AUTO');
$time1 = mb_convert_encoding($time1,'UTF-8','AUTO');
$sdata1= mb_convert_encoding($sdata1,'UTF-8','AUTO');
$sdata2 = mb_convert_encoding($sdata2,'UTF-8','AUTO');
$sdata3 = mb_convert_encoding($sdata3,'UTF-8','AUTO');
$sdata4 = mb_convert_encoding($sdata4,'UTF-8','AUTO');
$sdata5 = mb_convert_encoding($sdata5,'UTF-8','AUTO');
$sdata6 = mb_convert_encoding($sdata6,'UTF-8','AUTO');
$sdata7 = mb_convert_encoding($sdata7,'UTF-8','AUTO');
$sdata8 = mb_convert_encoding($sdata8,'UTF-8','AUTO');
$sdata9 = mb_convert_encoding($sdata9,'UTF-8','AUTO');
$sdata10 = mb_convert_encoding($sdata10,'UTF-8','AUTO');

//半角小文字に変換
$login_id = mb_convert_kana($login_id,'a','utf-8');
$login_id = strtolower($login_id);

$login_pass = mb_convert_kana($login_pass,'a','utf-8');
$login_pass = strtolower($login_pass);

$group_id = mb_convert_kana($group_id,'a','utf-8');
$group_id = strtolower($group_id);

//テキストを整形
$shop_name = mb_convert_kana($shop_name,'KaV','utf-8');
$shop_name2 = mb_convert_kana($shop_name2,'KaV','utf-8');
$daihyo = mb_convert_kana($daihyo,'KaV','utf-8');
$s_area = mb_convert_kana($s_area,'KaV','utf-8');
$add = mb_convert_kana($add,'KaV','utf-8');
$shop_tell = mb_convert_kana($shop_tell,'KaV','utf-8');
$mail = mb_convert_kana($mail,'KaV','utf-8');
$sdata1 = mb_convert_kana($sdata1,'KaV','utf-8');
$sdata2 = mb_convert_kana($sdata2,'KaV','utf-8');
$sdata3 = mb_convert_kana($sdata3,'KaV','utf-8');
$sdata4 = mb_convert_kana($sdata4,'KaV','utf-8');
$sdata5 = mb_convert_kana($sdata5,'KaV','utf-8');
$sdata6 = mb_convert_kana($sdata6,'KaV','utf-8');
$sdata7 = mb_convert_kana($sdata7,'KaV','utf-8');
$sdata8 = mb_convert_kana($sdata8,'KaV','utf-8');
$sdata9 = mb_convert_kana($sdata9,'KaV','utf-8');
$sdata10 = mb_convert_kana($sdata10,'KaV','utf-8');

//[']を除去  SQL用追加
$shop_name = str_replace('\'' , '' , $shop_name);
$shop_name2 = str_replace('\'' , '' , $shop_name2);
$s_area = str_replace('\'' , '' , $s_area);
$daihyo = str_replace('\'' , '' , $daihyo);
$add = str_replace('\'' , '' , $add);
$tell = str_replace('\'' , '' , $tell);
$mail = str_replace('\'' , '' , $mail);
$sdata1 = str_replace('\'' , '' , $sdata1);
$sdata2 = str_replace('\'' , '' , $sdata2);
$sdata3 = str_replace('\'' , '' , $sdata3);
$sdata4 = str_replace('\'' , '' , $sdata4);
$sdata5 = str_replace('\'' , '' , $sdata5);
$sdata6 = str_replace('\'' , '' , $sdata6);
$sdata7 = str_replace('\'' , '' , $sdata7);
$sdata8 = str_replace('\'' , '' , $sdata8);
$sdata9 = str_replace('\'' , '' , $sdata9);
$sdata10 = str_replace('\'' , '' , $sdata10);

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規顧客登録確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規顧客登録確認">

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
				<h2>新規顧客登録確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="client_write.php" method="post" id="form">
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><?php echo $shop_name; ?></label>
							</p>
							<p>
								<label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><?php echo $shop_name2; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
								<label><span>店舗URL（<font color="#FF0000">必須</font>）</span><?php echo $s_url; ?></label>
							</p>
							<p>
								<label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><?php echo $login_id; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><?php echo $login_pass; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字<br />
								</span>								
							</p>		
							<p>
								<label><span>ナイトグラム掲載エリア（<font color="#FF0000">必須</font>）</span>
											<?php 
	if ($time3 == '1') {
	echo "群馬エリア";
}
	if ($time3 == '2') {
	echo "栃木エリア";
}
		if ($time3 == '3') {
	echo "埼玉エリア";
}
		if ($time3 == '4') {
	echo "長野エリア";
}
		if ($time3 == '5') {
	echo "富山エリア";
}
		if ($time3 == '6') {
	echo "新潟エリア";
}
		if ($time3 == '7') {
	echo "石川エリア";
}
		if ($time3 == '8') {
	echo "東京エリア";
}
		if ($time3 == '9') {
	echo "山梨エリア";
}
		if ($time3 == '10') {
	echo "神奈川エリア";
}
 ?>	
								</label>
							</p>
							<p>
								<label><span>エリア（<font color="#FF0000">必須</font>）</span>
										<?php 
									$result=mysqli_query($sql2, "SELECT * From `toshi_tb` WHERE toshi_id='$s_area' ");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから
	
	echo $toshi_name;

}
									
									?>	
								</label>
							</p>
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><?php echo $add; ?></label>
							</p>
							<p>
								<label><span>電話番号（<font color="#FF0000">必須</font>）</span><?php echo $shop_tell; ?></label>
							</p>
							<p>
								<label><span>メールアドレス（<font color="#FF0000">必須</font>）</span><?php echo $mail; ?></label>
							</p>
							<p>
								<label><span>代表者名（<font color="#FF0000">必須</font>）</span><?php echo $daihyo; ?></label>
							</p>
							<p>
								<label><span>次回契約日（<font color="#FF0000">必須</font>）</span><?php echo $time1; ?><br /></label>
							</p>
							<p>
								<label><span>契約形態（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($sdata1 == '1') {
	echo "初回 1年契約";
}
		if ($sdata1 == '2') {
	echo "2年目以降 1年契約";
}
		if ($sdata1 == '3') {
	echo "2年目以降 1ヶ月契約";
}
									?>
								</label>
							</p>
							<p>
								<label><span>お支払い方法（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($sdata2 == '1') {
	echo "銀行振込";
}
		if ($sdata2 == '2') {
	echo "クレジットカード";
}
	
					?>
								</label>
							</p>							
							<p>
								<label><span>クーポンページの有無（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($sdata3 == '1') {
	echo "なし";
}
		if ($sdata3 == '2') {
	echo "あり";
}
	
					?>
								</label>
							</p>
							<p>
								<label><span>スライダー、モーション画像、静止画像の選択（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($sdata4 == '1') {
	echo "スライダー";
}
		if ($sdata4 == '2') {
	echo "背景画像";
}
	
					?>
								</label>
							</p>
							<p>
								<label><span>ナイトグラムとの連動（<font color="#FF0000">必須</font>）</span>
								  <?php 
									if ($portal == '1') {
	echo "なし";
}
		if ($portal == '2') {
	echo "あり";
}
	
					?>
								</label>
							</p>
							<p>
								<label><span>キャスト出勤時間の有無（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($sdata7 == '2') {
	echo "なし";
}
		if ($sdata7 == '1') {
	echo "あり";
}
	
					?>
								</label>
							</p>
							<p>
								<label><span>グループ設定（<font color="#FF0000">必須</font>）</span>
									<?php 
									if ($sdata5 == '1') {
	echo "なし";
}
		if ($sdata5 == '2') {
	echo "あり";
}
	
					?>
								</label>
							</p>							
							<p>
								<label><span>グループID（<font color="#FF0000">グループと連動する場合</font>）</span><?php echo $group_id; ?></label>
							</p>							
							
							<div class="under_button_area_2">
								<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
		<input type="hidden" name="s_url" value="<?php echo $s_url; ?>" />
		<input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />
		<input type="hidden" name="login_pass" value="<?php echo $login_pass; ?>" />
		<input type="hidden" name="shop_name" value="<?php echo $shop_name; ?>" />
		<input type="hidden" name="shop_name2" value="<?php echo $shop_name2; ?>" />
		<input type="hidden" name="s_area" value="<?php echo $s_area; ?>" />
		<input type="hidden" name="daihyo" value="<?php echo $daihyo; ?>" />
		<input type="hidden" name="add" value="<?php echo $add; ?>" />
		<input type="hidden" name="shop_tell" value="<?php echo $shop_tell; ?>" />
		<input type="hidden" name="mail" value="<?php echo $mail; ?>" />
		<input type="hidden" name="time1" value="<?php echo $time1; ?>" />
		<input type="hidden" name="sdata1" value="<?php echo $sdata1; ?>" />
		<input type="hidden" name="sdata2" value="<?php echo $sdata2; ?>" />
		<input type="hidden" name="sdata3" value="<?php echo $sdata3; ?>" />
		<input type="hidden" name="sdata4" value="<?php echo $sdata4; ?>" />
		<input type="hidden" name="sdata5" value="<?php echo $sdata5; ?>" />
		<input type="hidden" name="sdata6" value="<?php echo $sdata6; ?>" />
		<input type="hidden" name="sdata7" value="<?php echo $sdata7; ?>" />
		<input type="hidden" name="sdata8" value="<?php echo $sdata8; ?>" />
		<input type="hidden" name="sdata9" value="<?php echo $sdata9; ?>" />
		<input type="hidden" name="sdata10" value="<?php echo $sdata10; ?>" />
		<input type="hidden" name="time2" value="<?php echo $time2; ?>" />
		<input type="hidden" name="time3" value="<?php echo $time3; ?>" />
		<input type="hidden" name="time4" value="<?php echo $time4; ?>" />
		<input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
		<input type="hidden" name="portal" value="<?php echo $portal; ?>" />
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