<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャバクラ　デモサイト「club CABAWEB キャバウェブ」</title>
<meta name="description" content="キャバクラデモサイトです。">
<meta name="keywords" content="キャバクラ,デモサイト">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">
<meta name="robots" content="noindex,nofollow">

</head>

<body>

<div id="top_fade">

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>HOT NEWS LIST</h2>
  </div>
</div>

<div class="page_base_area_2">
  <div class="page_base">
    <div class="wrapper">
		<?php
$result=mysqli_query($sql, "SELECT * From `news` WHERE sort>=$news_today AND link='1' AND blank='$shop_id' ORDER BY time DESC");
$cnt=mysqli_num_rows($result);

//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu2.php');

	
	echo "<div class=\"element_1\"><a href=\"hotnews_2.php?news_id=".$news_id."\"><div class=\"top_hotnews_a\"><div class=\"top_hotnews_b\">\n";
	if($photo1 == $empty){
	echo "<div class=\"trimming\"><img src=\"img/nophoto.jpg\" alt=\"".$seo."\" /></div>";
}else{
	echo "<div class=\"trimming\"><img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" /></div>";
}
	
	echo "</div>\n";
	
	echo "<div class=\"top_hotnews_c\">              
            <div class=\"top_hotnews_title\">".$newstitle."</div>
            <div class=\"top_hotnews_border\"></div>
            <div class=\"top_hotnews_naiyou\">".$input."</div>
          </div>\n";

	echo "<div class=\"clear\"></div>            
        </div><!--top_hotnews_a-->
        </a>        
      </div><!--element_1-->\n";
	
}
	
?>                 
      
    </div><!--wrapper-->
    

  </div><!--page_base-->  
</div><!--page_base_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->
<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>
<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
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
<script>
$(function() {
var topBtn = $('#page-top-2');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
});
</script>
<!--サイド　プラグイン-->
</body>

</html>