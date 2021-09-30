<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';


$id = $_POST['id'];
$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = htmlspecialchars($_POST['name2'] , ENT_QUOTES);
$link1 = $_POST['link1'];

//文字コード変換
$name = mb_convert_encoding($name,'UTF-8','AUTO');
$name2 = mb_convert_encoding($name2,'UTF-8','AUTO');

//[']を除去  SQL用追加
$name = str_replace('\'' , '' , $name);
$name2 = str_replace('\'' , '' , $name2);

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規グループ登録確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規グループ登録確認">

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
				<h2>新規グループ登録確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="group_write.php" method="post" id="form">
							<p>
								<label><span>グループ名（<font color="#FF0000">必須</font>）</span><?php echo $name; ?></label>
							</p>							
							<p>
								<label><span>グループ ID（<font color="#FF0000">必須</font>）</span><?php echo $name2; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角英数字のみ<br />
								</span>								
							</p>						
							<p>
								<label><span>エリア（<font color="#FF0000">必須</font>）</span>
									<?php 
									$result=mysqli_query($sql2, "SELECT * From `toshi_tb` WHERE toshi_id='$link1' ");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから
	
	echo $toshi_name;

}
									
									?>
								</label>
							</p>							
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input type="hidden" name="name" value="<?php echo $name; ?>" />
		<input type="hidden" name="name2" value="<?php echo $name2; ?>" />
							<input type="hidden" name="link1" value="<?php echo $link1; ?>" />
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