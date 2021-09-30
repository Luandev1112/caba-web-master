<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
}

?><!doctype html>
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
						<form action="client_rewrite.php" method="post" id="form"><input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="shop_name" class="txtfiled" placeholder="店舗名"  value="<?php echo $shop_name; ?>" required></label>
							</p>
							<p>
								<label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><input pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" title="全角カタカナでご入力ください。" type="text" name="shop_name2" class="txtfiled" placeholder="店舗名フリガナ"  value="<?php echo $shop_name2; ?>" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
								<label><span>店舗URL（<font color="#FF0000">必須</font>）</span><input type="url" name="s_url" class="txtfiled" placeholder="店舗URL"  value="<?php echo $s_url; ?>" required></label>
							</p>
							<p>
								<label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><?php echo $login_id; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※変更不可<br />
								</span>								
							</p>
							<p>
								<label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="login_pass" class="txtfiled" placeholder="店舗 PASS"  value="<?php echo $login_pass; ?>" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字<br />
								</span>								
							</p>		
											<p>
    <label><span>ナイトグラム掲載エリア（<font color="#CC0000">必須</font>）</span>
				<?php
if ($time3 == '1') {
	$time3_check1 = 'selected="selected"';
}

if ($time3 == '2') {
	$time3_check2 = 'selected="selected"';
}
if ($time3 == '3') {
	$time3_check3 = 'selected="selected"';
}
if ($time3 == '4') {
	$time3_check4 = 'selected="selected"';
}
if ($time3 == '5') {
	$time3_check5 = 'selected="selected"';
}
if ($time3 == '6') {
	$time3_check6 = 'selected="selected"';
}
if ($time3 == '7') {
	$time3_check7 = 'selected="selected"';
}
if ($time3 == '8') {
	$time3_check8 = 'selected="selected"';
}
if ($time3 == '9') {
	$time3_check9 = 'selected="selected"';
}
		if ($time3 == '10') {
	$time3_check10 = 'selected="selected"';
}
		if ($time3 == '11') {
	$time3_check11 = 'selected="selected"';
}
		if ($time3 == '12') {
	$time3_check12 = 'selected="selected"';
}
		if ($time3 == '13') {
	$time3_check13 = 'selected="selected"';
}
		if ($time3 == '14') {
	$time3_check14 = 'selected="selected"';
}
		if ($time3 == '') {
	$time3_check_no = 'selected="selected"';
}
?>
    <select name="time3">
		<option value="" <?php echo $time3_check_no; ?>>--</option>
    <option value="1" <?php echo $time3_check1; ?>>群馬エリア</option>
    <option value="2" <?php echo $time3_check2; ?>>栃木エリア</option>       
    <option value="3" <?php echo $time3_check3; ?>>埼玉エリア</option>
    <option value="4" <?php echo $time3_check4; ?>>長野エリア</option>
		<option value="5" <?php echo $time3_check5; ?>>富山エリア</option>
		<option value="6" <?php echo $time3_check6; ?>>新潟エリア</option>
		<option value="7" <?php echo $time3_check7; ?>>石川エリア</option>
		<option value="8" <?php echo $time3_check8; ?>>東京エリア</option>
		<option value="9" <?php echo $time3_check9; ?>>山梨エリア</option>
		<option value="10" <?php echo $time3_check10; ?>>神奈川エリア</option>
		<option value="11" <?php echo $time3_check11; ?>>熊本エリア</option>
		<option value="12" <?php echo $time3_check12; ?>>千葉エリア</option>
		<option value="13" <?php echo $time3_check13; ?>>愛知エリア</option>
		<option value="14" <?php echo $time3_check14; ?>>兵庫エリア</option>
    </select>
    </label>
    </p>
							<p>
								<label><span>エリア（<font color="#FF0000">必須</font>）</span>
									<select name="s_area" required>
										<?php
$result=mysqli_query($sql2, "SELECT * From `toshi_tb`");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから
		if($toshi_id==$s_area){
		echo "<option value=\"".$toshi_id."\" selected=\"selected\">".$toshi_name."</option>\n";
	}else{
	echo "<option value=\"".$toshi_id."\">".$toshi_name."</option>\n";
		}
}
?>
									</select>
								</label>
							</p>
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="add" class="txtfiled" placeholder="店舗住所" value="<?php echo $add; ?>" required></label>
							</p>
							<p>
								<label><span>電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="shop_tell" class="txtfiled" placeholder="電話番号" value="<?php echo $shop_tell; ?>" required></label>
							</p>
							<p>
								<label><span>メールアドレス（<font color="#FF0000">必須</font>）</span><input type="email" name="mail" class="txtfiled" placeholder="メールアドレス" value="<?php echo $mail; ?>" required></label>
							</p>
							<p>
								<label><span>代表者名（<font color="#FF0000">必須</font>）</span><input type="text" name="daihyo" class="txtfiled" placeholder="代表者名" value="<?php echo $daihyo; ?>" required></label>
							</p>
							<p>
								<label><span>次回契約日（<font color="#FF0000">必須</font>）</span><input type="date" name="time1" id="today" value="<?php echo $time1; ?>" required><br /></label>
							</p>
							<p><?php
if($sdata1=='1'){$sdata1_1=' selected="selected"';}
if($sdata1=='2'){$sdata1_2=' selected="selected"';}
if($sdata1=='3'){$sdata1_3=' selected="selected"';}
?>
								<label><span>契約形態（<font color="#FF0000">必須</font>）</span>
									<select name="sdata1" required>
										<option value="1"<?php echo $sdata1_1; ?>>初回 1年契約</option>
										<option value="2"<?php echo $sdata1_2; ?>>2年目以降 1年契約</option>
										<option value="3"<?php echo $sdata1_3; ?>>2年目以降 1ヶ月契約</option>
									</select>
								</label>
							</p>
							<p><?php
if($sdata2=='1'){$sdata2_1=' selected="selected"';}
if($sdata2=='2'){$sdata2_2=' selected="selected"';}

?>
								<label><span>お支払い方法（<font color="#FF0000">必須</font>）</span>
									<select name="sdata2" required>
										<option value="1"<?php echo $sdata2_1; ?>>銀行振込</option>
										<option value="2"<?php echo $sdata2_1; ?>>クレジットカード</option>
									</select>
								</label>
							</p>							
							<p><?php
if($sdata3=='1'){$sdata3_1=' selected="selected"';}
if($sdata3=='2'){$sdata3_2=' selected="selected"';}
?>
								<label><span>クーポンページの有無（<font color="#FF0000">必須</font>）</span>
									<select name="sdata3" required>
										<option value="1"<?php echo $sdata3_1; ?>>なし</option>
										<option value="2"<?php echo $sdata3_2; ?>>あり</option>
									</select>
								</label>
							</p>
							<p><?php
if($sdata4=='1'){$sdata4_1=' selected="selected"';}
if($sdata4=='2'){$sdata4_2=' selected="selected"';}
if($sdata4=='3'){$sdata4_3=' selected="selected"';}
?>
								<label><span>スライダー、モーション画像、静止画像の選択（<font color="#FF0000">必須</font>）</span>
									<select name="sdata4" required>
										<option value="1"<?php echo $sdata4_1; ?>>スライダー</option>
										<option value="2"<?php echo $sdata4_2; ?>>モーション画像</option>
										<option value="3"<?php echo $sdata4_3; ?>>静止画像</option>
									</select>
								</label>
							</p>
							<p><?php
if($portal=='1'){$portal_1=' selected="selected"';}
if($portal=='2'){$portal_2=' selected="selected"';}	
?>
								<label><span>ナイトグラムとの連動（<font color="#FF0000">必須</font>）</span>
									<select name="portal" required>
										<option value="2"<?php echo $portal_2; ?>>なし</option>
										<option value="1"<?php echo $portal_1; ?>>あり</option>
									</select>
								</label>
							</p>
							<p><?php
if($sdata7=='1'){$sdata7_1=' selected="selected"';}
if($sdata7=='2'){$sdata7_2=' selected="selected"';}

?>
								<label><span>キャスト出勤時間の有無（<font color="#FF0000">必須</font>）</span>
									<select name="sdata7" required>
										<option value="2"<?php echo $sdata7_2; ?>>なし</option>
										<option value="1"<?php echo $sdata7_1; ?>>あり</option>
									</select>
								</label>
							</p>
							<p><?php
if($sdata6=='1'){$sdata6_1=' selected="selected"';}
if($sdata6=='2'){$sdata6_2=' selected="selected"';}

?>
								<label><span>グループ設定（<font color="#FF0000">必須</font>）</span>
									<select name="sdata6" required>
										<option value="2"<?php echo $sdata6_2; ?>>なし</option>
										<option value="1"<?php echo $sdata6_1; ?>>あり</option>
									</select>
								</label>
							</p>							
							<p>
								<label><span>グループID（<font color="#FF0000">グループと連動する場合</font>）</span><input type="text" name="group_id" class="txtfiled" placeholder="グループID" value="<?php echo $group_id; ?>"></label>
							</p>								
							<input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />
<input type="hidden" name="operation" value="edit" />
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