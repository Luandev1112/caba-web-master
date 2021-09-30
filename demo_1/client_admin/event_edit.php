<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$news_id = $_GET['news_id'];

$result=mysqli_query($sql, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu2.php');
}
$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$blank'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu.php');
}
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>イベントの編集｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　イベントの編集">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

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
<!--サイド　プラグイン-->

<script>
function () {
    var today = new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0"+(today.getMonth()+1)).slice(-2);
    var dd = ("0"+today.getDate()).slice(-2);
    document.getElementById("today").value=yyyy+'.'+mm+'.'+dd;
}
</script>

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>イベントの編集</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="event_rewrite.php" method="post" id="form">
    <p>
		 <?php 
if($link == '1'){
	$icon1='selected="selected"';
	}elseif($link == '2'){
	$icon2='selected="selected"';
	}elseif($link == '3'){
	$icon3='selected="selected"';
	}elseif($link == '4'){
	$icon4='selected="selected"';
	}else{
	$icon1='selected="selected"';
	}
	?>
    <label><span>イベントカテゴリ（<font color="#CC0000">必須</font>）</span>
    <select name="link">
    <option value="2" <?php echo $icon2; ?>>Event</option>
    <option value="3" <?php echo $icon3; ?>>Closed</option>
    <option value="4" <?php echo $icon4; ?>>Birthday</option>     
    </select>
    </label>
    </p>
		 <input type="hidden" name="news_id" value="<?php echo $news_id; ?>" />
<input type="hidden" name="sort" value="<?php echo $sort; ?>" />
<input type="hidden" name="sort2" value="<?php echo $sort2; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
		<input type="hidden" name="end" value="<?php echo $end; ?>" />
		<input type="hidden" name="time" value="<?php echo $time; ?>" />
		<input type="hidden" name="blank" value="<?php echo $blank; ?>" />
    <p>
    <label><span>日程（<font color="#CC0000">必須</font>）</span><input type="date" name="start" id="today" value="<?php echo $start; ?>" required><br />
    <font size="2" color="#FF6666">設定した日付を過ぎると自動的に削除されます。</font>
    </label>
    </p>    
    <p>
    <label><span>タイトル（<font color="#CC0000">必須</font>）</span><input type="text" name="newstitle" class="txtfiled" placeholder="例）あいちゃん誕生日パーティー" value="<?php echo $newstitle; ?>" required></label>
    </p>
    <p>
    <label><span>内容</span><?php $input = str_replace("<br />" , "\r\n" , $input); ?><textarea name="input" class="txtfiled" rows="5"><?php echo $input; ?></textarea></label>
    </p>
    <input type="hidden" name="operation" value="edit" />
    <input name="jpeg" type="hidden" value="<?php echo $jpeg; ?>" />
    <div class="todayscast_button_2">
    <button type="submit" class="formbtn_2">登録する</button>
    </div>
    </form> 

  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>