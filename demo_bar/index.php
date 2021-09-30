<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ガールズバー　デモサイト「club CABAWEB キャバウェブ」</title>
<meta name="description" content="ガールズバーデモサイトです。">
<meta name="keywords" content="ガールズバー,デモサイト">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/swiper.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">
<meta name="robots" content="noindex,nofollow">

</head>

<body>

<div id="topfade-bg"> 
<div id="topfade">
<div id="" class="top-animation animated fadeOut"><img src="img/logo.svg" alt=""></div>
</div>
</div>

<div id="top_fade">

<div class="drawer drawer--top">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-first">
          <div class="wrapper_sidemenu">
            <div class="element_sidemenu_1"><a href="tel:000-0000-0000" class=""><img src="img/tel_side.svg"></a></div>
            <div class="element_sidemenu_1"><a href="https://goo.gl/maps/29ujZihpH5n" class=""><img src="img/map_side.svg"></a></div>
          </div>
        </li>       
        <li>
          <a class="drawer-brand" href="hotnews.php" title="ホットニュース">HOT NEWS</a>
        </li>
        <li>
          <a class="drawer-brand" href="schedule.php" title="出勤情報">SCHEDULE</a>
        </li>                
        <li>
          <a class="drawer-brand" href="cast.php" title="キャスト">CAST LIST</a>
        </li>
        <li>
          <a class="drawer-brand" href="event.php" title="イベントカレンダー">CALENDAR</a>
        </li>
        <li>
          <a class="drawer-brand" href="system.php" title="料金システム">SYSTEM</a>
        </li>
        <li>
          <a class="drawer-brand" href="shopphoto.php" title="店内写真">FLOOR</a>
        </li>
        <li>
          <a class="drawer-brand" href="recruit.php" title="キャスト求人情報">CAST RECRUIT</a>          
        </li>
        <li>
          <a class="drawer-brand" href="recruit.php#staff" title="スタッフ求人情報">STAFF RECRUIT</a>
        </li>                           
        <li>
          <div class="wrapper_side">
            <div class="element_sns"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><img src="img/facebook_2.svg" alt="Facebook" /></a></div>          
            <div class="element_sns"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="img/instagram_2.svg" alt="Instagram" /></a></div>          
            <div class="element_sns"><a href="https://twitter.com/" target="_blank" title="Twitter"><img src="img/twitter_2.svg" alt="Twitter" /></a></div> 
            <div class="element_sns"><a href="https://ameblo.jp/" target="_blank" title="ブログ"><img src="img/blog_2.svg" alt="ブログ" /></a></div>                                              
          </div>
        </li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1>
    <li class="menu__single">
      <a href="hotnews.php" title="ホットニュース">HOT NEWS</a>
    </li>
    <li class="menu__single">
      <a href="schedule.php" title="出勤情報">SCHEDULE</a>
    </li>      
    <li class="menu__single">
      <a href="cast.php" title="キャスト">CAST LIST</a>
    </li>        
    <li class="menu__single">
      <a href="event.php" title="イベントカレンダー">CALENDAR</a>
    </li>
    <li class="menu__single">
      <a href="system.php" title="料金システム">SYSTEM</a>
    </li>
    <li class="menu__single">
      <a href="shopphoto.php" title="店内写真">FLOOR</a>
    </li>                
    <li class="menu__single">
        <a href="#" class="init-bottom" title="求人情報">RECRUIT</a>
        <ul class="menu__second-level">
            <li><a href="recruit.php" title="キャスト求人">キャスト求人</a></li>
            <li><a href="recruit.php#staff" title="スタッフ求人">スタッフ求人</a></li>                       
        </ul>
    </li>               
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div class="top_img_area">

<div class="swiper-container">
  <div class="swiper-wrapper">
	  <?php 

$result=mysqli_query($sql, "SELECT * From `data2` WHERE `name2` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu3.php');
	
	if($photo1 == $empty){
	echo "";
}else{
		if($link1 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link1."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	
	if($photo2 == $empty){
	echo "";
}else{
		if($link2 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link2."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo3 == $empty){
	echo "";
}else{
		if($link3 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link3."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo4 == $empty){
	echo "";
}else{
		if($link4 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link4."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo5 == $empty){
	echo "";
}else{
		if($link5 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link5."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo6 == $empty){
	echo "";
}else{
		if($link6 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link6."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo7 == $empty){
	echo "";
}else{
		if($link7 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link7."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo8 == $empty){
	echo "";
}else{
		if($link8 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link8."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo9 == $empty){
	echo "";
}else{
		if($link9 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link9."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	if($photo10 == $empty){
	echo "";
}else{
		if($link10 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link10."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	  
	?>
	  
  </div>
  <div class="swiper-pagination"></div>
  <!--div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div-->
</div>
 
</div>

<div class="clear"></div>

<div class="top_news_bg">
  <div class="top_contents_in"> 
    <h2>HOT NEWS</h2>
    <div class="wrapper">
		<?php
$result=mysqli_query($sql, "SELECT * From `news` WHERE sort>=$news_today AND link='1' AND blank='$shop_id' ORDER BY time DESC LIMIT 2");
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
    <div class="top_button_area_2"><a href="hotnews.php" class="btn_under" title="ホットニュース一覧">More</a></div> 
  
  </div>  
</div>

<div class="top_schedule_bg">
  <div class="top_contents_in">
  <h2>TODAYs CAST</h2>
  <div class="top_schedule_space">
    <div class="wrapper">
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485053" title="">
          <div class="top_cast_box_wrap">
          <img src="img/ai.jpg" class="" alt="">
          <p>あい</p>
          </div>
          </a>
        </div>
      </div><!--element_2-->
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485159" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nana.jpg" class="" alt="">
          <p>なな</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485258" title="">
          <div class="top_cast_box_wrap">
          <img src="img/miki.jpg" class="" alt="">
          <p>もえ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485374" title="">
          <div class="top_cast_box_wrap">
          <img src="img/test_2.jpg" class="" alt="">
          <p>みか</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485414" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>ゆうみ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485428" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>ゆうこ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485441" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>かな</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485454" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>さおり</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="体験入店">
          <p>体験入店 1</p>
          </div>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="体験入店">
          <p>体験入店 2</p>
          </div>
        </div>
      </div>                                                                                                
    </div>
 
    <div class="top_button_area_2"><a href="schedule.php" class="btn_under" title="出勤情報">More</a></div>   
    </div><!--top_schedule_space-->
     
  </div><!--top_contents_in-->
</div><!--top_schedule_bg-->

<div class="top_instagram_bg">
  <h3>INSTAGRAM</h3>
  <div class="top_contents_in">
    <div class="top_instagram_base">
    <div class="elfsight-app-a02dcb4e-1148-47f4-aaa9-ec5590efee85"></div>     
    
    </div>
    <div id="clear"></div>    
  </div>
</div>


<div id="footer">

  <div class="page-side">
    <p id="page-top-2"><a href="../contact.php" onclick="gtag('event', 'click', {'event_category': '申込みボタン','event_label': 'お申込み','value': '1'});" style="color:#FFF">お申込み<br />・<br />お問合せ</a></p> 
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_in">
    <h4>SHOP DATA</h4>
    <div class="footer_shop">
    Add. 群馬県前橋市天川大島町<br />
    Tel. <a href="tel:000-000-0000">000-000-0000</a><br />
    Open. 20:00～4:00 / Closed. 日曜日<br />
    </div>
    <ul class="inline-block footer_img_1">
      <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><img src="img/facebook_2.svg" alt="Facebook" /></a></li>
      <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="img/instagram_2.svg" alt="Instagram" /></a></li>
      <li><a href="https://twitter.com/" target="_blank" title="Twitter"><img src="img/twitter_2.svg" alt="Twitter" /></a></li>
      <li><a href="https://ameblo.jp/" target="_blank" title="ブログ"><img src="img/blog_2.svg" alt="ブログ" /></a></li>      
    </ul>    
  </div>

  <div class="top_access_box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12849.814913949918!2d139.09406233124253!3d36.374008656030576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ef212bc414d3f%3A0x56e8db5759c8c4a8!2z44CSMzc5LTIxNTQg576k6aas55yM5YmN5qmL5biC5aSp5bed5aSn5bO255S6!5e0!3m2!1sja!2sjp!4v1537530347789" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>    

  <div class="footer_in">
    <p>© 2019 cabaweb.</p>
  </div>
   
</div>

</main>

</div><!--drawer drawer--left-->

</div><!--fade-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->
<script src="js/jquery.cookie.js"></script>
<!--インスタ-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>
<!-- スワイパー -->
<script src="js/swiper.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: "coverflow", //"slide", "fade", "cube", "coverflow" or "flip"
	loop: true,
	loopAdditionalSlides: 1,
    speed: 500,
    autoHeight: true,
	slidesPerView: 1.6,
	spaceBetween: 40,
	followFinger: false,
	centeredSlides: true,
	grabCursor: true,
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 0
		},
	},			
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
	}, 
    pagination: {
      el: '.swiper-pagination',
	  type: 'bullets',
      clickable: true,
	},
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
	},   
  });
</script>
<!--フェード　プラグイン-->
<script>
$(function() {
	var h = $(window).height(); //ブラウザウィンドウの高さを取得
	$('#main-contents').css('display','none'); //初期状態ではメインコンテンツを非表示
	$('#topfade-bg ,#topfade').height(h).css('display','block'); //ウィンドウの高さに合わせでローディング画面を表示
	});
	$(window).load(function () {
		$('#topfade-bg').delay(1000).fadeOut(500); //$('#loader-bg').fadeOut(800);でも可
		$('#topfade').delay(800).fadeOut(300); //$('#loader').fadeOut(300);でも可
		$('#main-contents').css('display', 'block'); // ページ読み込みが終わったらメインコンテンツを表示する
		});
		$(function(){
			setTimeout('stopload()',3000);　//いつまでもローディング状態にならないように3秒で強制表示させる
			});
			function stopload(){ //強制表示の関数
			$('#main-contents').css('display','block');
			$('#topfade-bg').delay(1000).fadeOut(500);
			$('#topfade').delay(800).fadeOut(300);
}
</script>
<script>
$(function(){
    if($.cookie("access")){
        $('#topfade-bg').css({display:'none'});
    }
    $(window).load(function(){
        $.cookie("access",$('body').addClass('access'));
    })
});
</script>
<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
</script>
<!--画像調整-->
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
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