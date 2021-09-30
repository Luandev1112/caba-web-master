<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once '../login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
//ファンクションファイル読み込み
require_once '../parts/function.php';

$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
include('../parts/area_link_job.php');
}


$result=mysqli_query($sql3, "SELECT * From `shop` WHERE `login_id` = '$data5'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu_shop.php');
}

$result=mysqli_query($sql3, "SELECT * From `taiken` WHERE `shop_no` = '$data5'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu13.php');
}
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>体験人数設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　体験人数設定">

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
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">体験人数設定</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<h3><?php echo $day1; ?>(<?php echo $week1; ?>)の体験人数を設定</h3>
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
							<br />
							※体験人数は朝5:00にリセットされます。
						</div>
						<form action="taiken_ok.php" method="post" id="form">
							<div class="taiken_page_box">
								<p><?php
if($taiken_num=='0'){$num0=' selected="selected"';}
if($taiken_num=='1'){$num1=' selected="selected"';}
if($taiken_num=='2'){$num2=' selected="selected"';}
if($taiken_num=='3'){$num3=' selected="selected"';}
if($taiken_num=='4'){$num4=' selected="selected"';}
if($taiken_num=='5'){$num5=' selected="selected"';}
if($taiken_num=='6'){$num6=' selected="selected"';}
if($taiken_num=='7'){$num7=' selected="selected"';}
if($taiken_num=='8'){$num8=' selected="selected"';}
if($taiken_num=='9'){$num9=' selected="selected"';}
if($taiken_num=='10'){$num10=' selected="selected"';}
?>
									<label>
										<select name="taiken_num">
<option value="0"<?php echo $num0; ?>>--</option>
	  <option value="1"<?php echo $num1; ?>>1</option>
	  <option value="2"<?php echo $num2; ?>>2</option>
	  <option value="3"<?php echo $num3; ?>>3</option>
	  <option value="4"<?php echo $num4; ?>>4</option>
	  <option value="5"<?php echo $num5; ?>>5</option>
	  <option value="6"<?php echo $num6; ?>>6</option>
	  <option value="7"<?php echo $num7; ?>>7</option>
	  <option value="8"<?php echo $num8; ?>>8</option>
	  <option value="9"<?php echo $num9; ?>>9</option>
	  <option value="10"<?php echo $num10; ?>>10</option>
  </select>
									</label>
								</p>
							</div>
							<div class="under_button_area_2"> <input type="hidden" name="taiken_id" value="<?php echo $taiken_id; ?>" />
	  <input type="hidden" name="shop_no" value="<?php echo $shop_no; ?>" /><input type="hidden" name="no" value="<?php echo $no; ?>" />
								<button type="submit" class="formbtn_2">体験人数を登録</button>
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