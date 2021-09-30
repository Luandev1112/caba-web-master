<?php
		//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

//ファンクションファイル読み込み
require_once '../cabaweb_master_admin/parts/function.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}
$result=mysqli_query($sql2, "SELECT * From `shop_tb` WHERE `data5` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu8.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規キャスト登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規キャスト登録">

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
				<h2>新規キャスト登録</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="cast_check.php" method="post" id="form">
							<p>
								<label><span>お名前（<font color="#FF0000">必須</font>）</span><input type="text" name="name" class="txtfiled" placeholder="例）ゆうこ" required></label>
							</p>
							<input name="name2" type="hidden" class="w_per50" value="<?php echo time(); ?>" />
							<p>
								<label><span>年齢</span>
									<select name="age">
										<option value="--">--</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>お誕生日</span><input type="text" name="profinfo1" class="txtfiled" placeholder="例）1990年4月4日"></label>
							</p>
							<p>
								<label><span>血液型</span>
									<select name="profinfo2">
										<option value="--">--</option>
										<option value="A型">A型</option>
										<option value="B型">B型</option>
										<option value="O型">O型</option>
										<option value="AB型">AB型</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>出身地</span><input type="text" name="profinfo3" class="txtfiled" placeholder="例）東京"></label>
							</p>
							<p>
								<label><span>趣味・特技</span><input type="text" name="profinfo4" class="txtfiled" placeholder="例）料理"></label>
							</p>
							<p>
								<label><span>好みのタイプ</span><input type="text" name="profinfo5" class="txtfiled" placeholder="例）優しい人"></label>
							</p>
							<p>
								<label><span>好きな食べ物</span><input type="text" name="profinfo6" class="txtfiled" placeholder="例）お寿司・焼き肉"></label>
							</p>
							<p>
								<label><span>好きなブランド</span><input type="text" name="profinfo7" class="txtfiled" placeholder="例）グッチ"></label>
							</p>
							<p>
								<label><span>チャームポイント</span><input type="text" name="profinfo8" class="txtfiled" placeholder="例）目"></label>
							</p>
							
							<div class="cast_touroku_area">
								<h3>登録できるSNS</h3>
								<p>
									<label><span>Instagram</span><span style="font-size: 80%; color: #FF0000;">※登録する場合はID（ユーザー名）を担当者又は運営部までご連絡ください。</span></label>
								</p>
								<p>
									<label><span>You Tube</span><span style="font-size: 80%; color: #FF0000;">※登録する場合はYou TubeチャンネルURLを担当者又は運営部までご連絡ください。</span></label>
								</p>
								<p>
									<label><span>Twitter</span><span style="font-size: 80%; color: #FF0000;">※登録する場合はID（ユーザー名）を担当者又は運営部までご連絡ください。</span></label>
								</p>
								<p>
									<label><span>Tik Tok</span><span style="font-size: 80%; color: #FF0000;">※登録する場合はアカウントURLを担当者又は運営部までご連絡ください。</span></label>
								</p>								
							</div>
							<input name="yobi1" type="hidden" class="w_per50" value="<?php echo $login_id; ?>" />
		<input name="option10" type="hidden" class="w_per50" value="<?php echo $portal; ?>" />
		<input name="option20" type="hidden" class="w_per50" value="<?php echo $no; ?>" />
		<input name="option23" type="hidden" class="w_per50" value="<?php echo $area; ?>" />
		<input name="option24" type="hidden" class="w_per50" value="<?php echo $area2; ?>" />
		<input name="option25" type="hidden" class="w_per50" value="<?php echo $hyouji; ?>" />
							<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
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