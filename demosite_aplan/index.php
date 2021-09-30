<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>Aプランのホームページデモサイト</title>
<meta name="description" content="Aプランのホームページデモサイト">
<meta name="keywords" content="Aプラン">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href='instagram-feed/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

<!-- photo css -->
<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

<link href='instagram-feed/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--スライダー・カルーセル　プラグイン-->
<script src="js/jquery.bxslider.min.js"></script>
<!--スライダー・カルーセル　プラグイン-->

<script src="js/jquery.cookie.js"></script>

<script src="js/slider.js"></script>

<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
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

<!--アニメーション　プラグイン-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 50){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
<!--アニメーション　プラグイン-->

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

</head>

<body>

<div id="topfade-bg"> 
<div id="topfade">
<div class="top-animation animated zoomOut"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></div>
</div>
</div>

<div class="drawer drawer--right">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li>
          <div class="wrapper_sidemenu">
            <div class="element_sidemenu"><a href="tel:000-000-000" class="btn_sidemenu">TEL</a></div>
            <div class="element_sidemenu"><a href="https://goo.gl/maps/29ujZihpH5n" class="btn_sidemenu">MAP</a></div>
          </div>
        </li>
        <li><a class="drawer-brand" href="concept.php" title="">CONCEPT</a></li>
        <li><a class="drawer-brand" href="hotnews.php" title="">HOT NEWS</a></li>
        <li><a class="drawer-brand" href="schedule.php" title="">SCHEDULE</a></li>                
        <li><a class="drawer-brand" href="cast.php" title="">CAST LIST</a></li>
        <li><a class="drawer-brand" href="system.php" title="">SYSTEM</a></li>
        <li><a class="drawer-brand" href="lineat.php" title="">LINE@</a></li>
        <li><a class="drawer-brand" href="shopphoto.php" title="">SHOP PHOTO</a></li>
        <li><a class="drawer-brand" href="recruit.php" title="">RECRUIT</a></li>    
        <li>
          <div class="wrapper_side">
            <div class="element_sns"><a href="https://www.facebook.com/" target="_blank" title="<?php echo $seo; ?>Facebook"><img src="img/facebook_2.svg" alt="<?php echo $seo; ?>Facebook" /></a></div>          
            <div class="element_sns"><a href="https://www.instagram.com/" target="_blank" title="<?php echo $seo; ?>Instagram"><img src="img/instagram_2.svg" alt="<?php echo $seo; ?>Instagram" /></a></div>          
            <div class="element_sns"><a href="https://twitter.com/" target="_blank" title="<?php echo $seo; ?>Twitter"><img src="img/twitter_2.svg" alt="<?php echo $seo; ?>Twitter" /></a></div>                                  
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
      <a href="concept.php">CONCEPT</a>
    </li>
    <li class="menu__single">
      <a href="hotnews.php">HOT NEWS</a>
    </li>
    <li class="menu__single">
      <a href="schedule.php">SCHEDULE</a>
    </li>      
    <li class="menu__single">
      <a href="cast.php">CAST LIST</a>
    </li>        
    <li class="menu__single">
      <a href="system.php">SYSTEM</a>
    </li>
    <li class="menu__single">
      <a href="lineat.php">LINE@</a>
    </li>
    <li class="menu__single">
      <a href="shopphoto.php">SHOP PHOTO</a>
    </li>                
    <li class="menu__single">
      <a href="recruit.php">RECRUIT</a>
    </li>       
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div class="bxslider2">
  <div class="bxslider">
    <ul>
      <li><img src="img/top1.jpg" alt="" /></li>
      <li><img src="img/top3.jpg" alt="" /></li>      
      <li><a href="recruit.php"><img src="img/top2.jpg" alt="" /></a></li>    
      <li><a href="lineat.php"><img src="img/top4.jpg" alt="" /></a></li>
    </ul>
  </div>
</div>

<div class="clear"></div>

<div class="top_img_area">
 
</div>

<div class="top_news_bg">
  <div class="top_contents_in"> 
    <h2>HOT NEWS</h2>
    <div class="wrapper">
      <div class="element_1">
        <a href="hotnews_2.php">    
        <div class="top_hotnews_a">      
          <div class="top_hotnews_b">
            <div class="trimming"><img src="img/test_1.jpg" class="img_border"></div>
          </div>
          <div class="top_hotnews_c">
            <div class="top_hotnews_ymd">2018.10.20 / 20:20</div>              
            <div class="top_hotnews_title">新作モエ・エ・シャンドン入荷中</div>
            <div class="top_hotnews_border"></div>
            <div class="top_hotnews_naiyou">期間限定のモエ・エ・シャンドンが入荷中しております。期間限定ですのでこの機会を逃したら飲めない!?</div>
          </div>
          <div class="clear"></div>            
        </div><!--top_hotnews_a-->
        </a>        
      </div><!--element_1-->
      <div class="element_1">
        <a href="hotnews_2-2.php">    
        <div class="top_hotnews_a">      
          <div class="top_hotnews_b">
            <div class="trimming"><img src="img/ai-1.jpg" class="img_border"></div>
          </div>
          <div class="top_hotnews_c">
            <div class="top_hotnews_ymd">2018.10.15 / 20:20</div>              
            <div class="top_hotnews_title">あいちゃん誕生日イベント開催</div>
            <div class="top_hotnews_border"></div>
            <div class="top_hotnews_naiyou">あいちゃんの誕生日イベントを開催します！開催日は11月11日です。当店であいちゃんのお誕生日をお祝いしよう！</div>
          </div>
          <div class="clear"></div>            
        </div>
        </a>
      </div><!--element_1-->            
      
    </div><!--wrapper-->
    <div class="top_button_area_2"><a href="hotnews.php" class="btn_under">More</a></div> 
  
  </div>  
</div> 

<div class="top_castblog_bg">
  <div class="top_contents_in">
  <h2>CAST BLOG</h2>

    <div class="blog_page_base">

    <div class="wrapper">
      <div class="element_topblog_in">
        <a href="castblog_2.php">
        <div class="blog_page_box_in">
          <div class="trimming_blog blog_on">
          <img src="img/blog_1.jpg" class="img_border">
            <span>
              <div class="top_blog_box_in_name_on">あや</div>
              <div class="top_blog_box_in_time_on">10.15 / 18:35</div>
            </span>
          </div>
        </div><!--blog_page_box_in-->
        </a>
      </div><!--element_topblog_in-->
      <div class="element_topblog_in">
        <a href="castblog_2.php">
        <div class="blog_page_box_in">
          <div class="trimming_blog blog_on">
          <img src="img/blog_2.jpg" class="img_border">
            <span>
              <div class="top_blog_box_in_name_on">あや</div>
              <div class="top_blog_box_in_time_on">10.15 / 18:35</div>
            </span>
          </div>
        </div><!--blog_page_box_in-->
        </a>
      </div><!--element_topblog_in-->
      <div class="element_topblog_in">
        <a href="castblog_2.php">
        <div class="blog_page_box_in">
          <div class="trimming_blog blog_on">
          <img src="img/blog_3.jpg" class="img_border">
            <span>
              <div class="top_blog_box_in_name_on">あや</div>
              <div class="top_blog_box_in_time_on">10.15 / 18:35</div>
            </span>
          </div>
        </div><!--blog_page_box_in-->
        </a>
      </div><!--element_topblog_in-->
      <div class="element_topblog_in">
        <a href="castblog_2.php">
        <div class="blog_page_box_in">
          <div class="trimming_blog blog_on">
          <img src="img/blog_4.jpg" class="img_border">
            <span>
              <div class="top_blog_box_in_name_on">あや</div>
              <div class="top_blog_box_in_time_on">10.15 / 18:35</div>
            </span>
          </div>
        </div><!--blog_page_box_in-->
        </a>
      </div><!--element_topblog_in-->                                                                                                                                            
    </div><!--wapper-->
    
    </div><!--blog_page_base-->
    
    <div class="top_button_area_2"><a href="castblog.php" class="btn_under">More</a></div>     

    
  </div>
</div>


<div class="top_schedule_bg">
  <div class="top_contents_in">
  <h2>CAST SCHEDULE</h2>
  <div class="top_schedule_space">
    <div class="wrapper">
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/ai.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">あい</div>
          </a>
        </div>
      </div><!--element_2-->
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nana.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">なな</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/miki.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">みき</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/test_2.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">みか</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">ゆうみ</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">ゆうこ</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">かな</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">さおり</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">ああああああああああああああああああああああ</div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">体験入店 1</div>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="img_border">
          </div>
          <div class="top_schedule_name">体験入店 2</div>
        </div>
      </div>                                                                                                
    </div>
 
    <div class="top_button_area_2"><a href="schedule.php" class="btn_under">More</a></div>   
    </div><!--top_schedule_space-->
     
  </div><!--top_contents_in-->
</div><!--top_schedule_bg-->

<div class="top_instagram_bg">
  <h3>INSTAGRAM</h3>
  <div class="top_contents_in">
  
<script>
    var feed1 = {
        "accesstoken": "c21hODU4MzQ5MDU0Ni4zYTgxYTlmLjQ5NTEwZDEzNWFjYTQ0NTlhM2Y5ZDZlODgyZTNhMWVi.Nzc3MTc0MzY5NDk5NA==.c2hid3d3LmNhYmEtd2ViLmNvbQ==", //Separate multiple Access Tokens with commas. Get your Access Token here: https://smashballoon.com/instagram-feed/standalone/token/
        "type": "user", //Type of feed
        "num" : "10", //Number of posts to display
		"cols" : 5,
		"showheader" : "false",
		"imagepadding" : "1",		
		"imagepaddingunit" : "px",		
		"disablemobile" : "false",
		"showcaption" : "false",
		"showlikes" : "false",
		"res" : "auto",
		"hovercolor" : "#b6906c",
		"hovertextcolor" : "#ffffff",
		"hoverdisplay" : "date,username,likes,instagram",
		"showbutton" : "true",
		"buttoncolor" : "#ffffff",
		"buttontextcolor" : "#000000",
		"buttontext" : "もっと見る",
		"showfollow" : "false",
    };
</script>

<div id="sb_instagram" class="sbi" data-settings="feed1"></div>

<script integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src='instagram-feed/js/sb-instagram-standalone-2.7.3.js' id='sb_instagram_standalone_scripts-js' type='text/javascript'></script> 

    <div id="clear"></div>
    <div class="top_button_area_2"><a href="https://www.instagram.com/zima_test/" target="_blank" class="btn_under">Instagram</a></div>     
  </div>
</div>


  


<div id="footer">

  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_in">
    <h4>SHOP DATA</h4>
    <div class="footer_shop">
    Add. 群馬県前橋市天川大島町<br />
    Tel. 000-000-0000<br />
    Open. 20:00～LAST / Closed. 月曜日<br />
    </div>
  </div>

  <div class="top_access_box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12849.814913949918!2d139.09406233124253!3d36.374008656030576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ef212bc414d3f%3A0x56e8db5759c8c4a8!2z44CSMzc5LTIxNTQg576k6aas55yM5YmN5qmL5biC5aSp5bed5aSn5bO255S6!5e0!3m2!1sja!2sjp!4v1537530347789" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>    

  <div class="footer_in">
      
    <ul class="inline-block">
      <li><a href="https://www.facebook.com/" target="_blank" title=""><img src="img/facebook_2.svg" alt="" /></a></li>
      <li><a href="https://www.instagram.com/" target="_blank" title=""><img src="img/instagram_2.svg" alt="" /></a></li>
      <li><a href="https://twitter.com/" target="_blank" title=""><img src="img/twitter_2.svg" alt="" /></a></li>
    </ul>
    
    <p>© 2018 club mono.</p>
  </div>
   
</div>

</main>

</div><!--drawer drawer--left-->

</body>

</html>