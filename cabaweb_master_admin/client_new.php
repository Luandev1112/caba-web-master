<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規顧客登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規顧客登録">

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
				<h2>新規顧客登録</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="client_check.php" method="post" id="form">
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="shop_name" class="txtfiled" placeholder="店舗名" required></label>
							</p>
							<p>
								<label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><input pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" title="全角カタカナでご入力ください。" type="text" name="shop_name2" class="txtfiled" placeholder="店舗名フリガナ" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
								<label><span>店舗URL（<font color="#FF0000">必須</font>）</span><input type="url" name="s_url" class="txtfiled" placeholder="店舗URL" required></label>
							</p>
							<p>
								<label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="login_id" class="txtfiled" placeholder="店舗 ID" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="login_pass" class="txtfiled" placeholder="店舗 PASS" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字<br />
								</span>								
							</p>
							<p>
    <label><span>ナイトグラム掲載エリア（<font color="#CC0000">必須</font>）</span>
    <select name="time3" required>
		<option value="" selected>--</option>
         <option value="1">群馬エリア</option>
    <option value="2">栃木エリア</option>       
    <option value="3">埼玉エリア</option>
    <option value="4">長野エリア</option>
	<option value="5">富山エリア</option>
	<option value="6">新潟エリア</option>
		<option value="7">石川エリア</option>
		<option value="8">東京エリア</option>
				<option value="9">山梨エリア</option>
		<option value="10">神奈川エリア</option>
		<option value="11">熊本エリア</option>
		<option value="12">千葉エリア</option>
		<option value="13">愛知エリア</option>
		<option value="14">兵庫エリア</option>
    </select>
    </label>
    </p>
							<p>
								<label><span>エリア（<font color="#FF0000">必須</font>）</span>
									<select name="s_area" required>
										<?php
$result=mysqli_query($sql2, "SELECT * From `toshi_tb` ORDER by toshi_id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから

echo "<option value=\"".$toshi_id."\" />\n";
echo "".$toshi_name."</option>\n";

}
?>
									</select>
								</label>
							</p>
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="add" class="txtfiled" placeholder="店舗住所" required></label>
							</p>
							<p>
								<label><span>電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="shop_tell" class="txtfiled" placeholder="電話番号" required></label>
							</p>
							<p>
								<label><span>メールアドレス（<font color="#FF0000">必須</font>）</span><input type="email" name="mail" class="txtfiled" placeholder="メールアドレス" required></label>
							</p>
							<p>
								<label><span>代表者名（<font color="#FF0000">必須</font>）</span><input type="text" name="daihyo" class="txtfiled" placeholder="代表者名" required></label>
							</p>
							<p>
								<label><span>次回契約日（<font color="#FF0000">必須</font>）</span><input type="date" name="time1" id="today" required><br /></label>
							</p>
							<p>
								<label><span>契約形態（<font color="#FF0000">必須</font>）</span>
									<select name="sdata1" required>
										<option value="1">初回 1年契約</option>
										<option value="2">2年目以降 1年契約</option>
										<option value="3">2年目以降 1ヶ月契約</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>お支払い方法（<font color="#FF0000">必須</font>）</span>
									<select name="sdata2" required>
										<option value="1">銀行振込</option>
										<option value="2">クレジットカード</option>
									</select>
								</label>
							</p>							
							<p>
								<label><span>クーポンページの有無（<font color="#FF0000">必須</font>）</span>
									<select name="sdata3" required>
										<option value="1">なし</option>
										<option value="2">あり</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>スライダー、モーション画像、静止画像の選択（<font color="#FF0000">必須</font>）</span>
									<select name="sdata4" required>
										<option value="1">スライダー</option>
										<option value="2">モーション画像</option>
										<option value="3">静止画像</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>ナイトグラムとの連動（<font color="#FF0000">必須</font>）</span>
									<select name="portal" required>
										<option value="2">なし</option>
										<option value="1">あり</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>キャスト出勤時間の有無（<font color="#FF0000">必須</font>）</span>
									<select name="sdata7" required>
										<option value="2">なし</option>
										<option value="1">あり</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>グループ設定（<font color="#FF0000">必須</font>）</span>
									<select name="sdata6" required>
										<option value="2">なし</option>
										<option value="1">あり</option>
									</select>
								</label>
							</p>							
							<p>
								<label><span>グループID（<font color="#FF0000">グループと連動する場合</font>）</span><input type="text" name="group_id" class="txtfiled" placeholder="グループID"></label>
							</p>							
							<input type="hidden" name="master_id" value="<?php echo strtotime("now"); ?>" />
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