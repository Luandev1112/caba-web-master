<?php
//設定ファイル読み込み
require_once 'admin/conf.php';
//ファンクションファイル読み込み
require_once 'admin/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<title></title>
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="format-detection" content="telephone=no">

<link rel="canonical" href="https://www.caba-lab.com/">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/style5.css">
<!-- フォトスワイプ CSSの読み込み -->
<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>
	
	<link href='instagram-feed/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">


<!--フェード-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--Instagram-->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/instafeed.min.js"></script>
<!--Instagram-->

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.5/dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--ヘッダー-->

<!--スライダー・カルーセル　プラグイン-->
<script src="js/jquery.bxslider.js"></script>
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
		$('#topfade-bg').delay(2000).fadeOut(500); //$('#loader-bg').fadeOut(800);でも可
		$('#topfade').delay(2000).fadeOut(300); //$('#loader').fadeOut(300);でも可
		$('#main-contents').css('display', 'block'); // ページ読み込みが終わったらメインコンテンツを表示する
		});
		$(function(){
			setTimeout('stopload()',2000);　//いつまでもローディング状態にならないように3秒で強制表示させる
			});
			function stopload(){ //強制表示の関数
			$('#main-contents').css('display','block');
			$('#topfade-bg').delay(2000).fadeOut(500);
			$('#topfade').delay(2000).fadeOut(300);
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
<script>
(function($) {
    $(function() {
        var $header = $('.inner');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 350) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);
</script>
<script>
$(function() {
  var $win = $(window),
      $header = $('.inner'),
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
            if (scroll > elemPos - windowHeight + 20){
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135636327-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135636327-1');
</script>

</head>

<body>

<div id="topfade-bg"> 
<div id="topfade">
<div id="" class="top-animation animated fadeOut"></div>
</div>
</div>

<div class="drawer drawer--left">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
  </header>
 
  
  
<main role="main"><!--グローバル end-->



<div class="clear"></div>

<div id="main-contents">

<div class="top_base">


  <!--PICK UP end-->
<div class="top_pickup_area">
    <div class="top_pickup_area_box">
      <h2>INSTA TEST<br />
        <span class="h2_sub">インスタテスト</span></h2>
        <div class="wrapper">
<script>
    var feed1 = {
        "accesstoken": "<?php
				
$result=mysqli_query($sql, "SELECT * From `cast_td` WHERE insta1!='' AND chyouji!='off' ORDER by cast_id ASC");
$cnt=mysqli_num_rows($result);
		
		$i=1;
		
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('admin/parts/basic_hensu2.php');


	
//▽表示内容ここから
if( $i < $cnt ) {	
	echo "".$insta1.",";	
}else{
	 echo "".$insta1."";	
}
++$i;
}

				
?>", //Separate multiple Access Tokens with commas. Get your Access Token here: https://smashballoon.com/instagram-feed/standalone/token/
        "type": "user", //Type of feed
        "num" : "10", //Number of posts to display
		"cols" : 5,
		"showheader" : "false",
		"imagepadding" : "0",		
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
		
		</div>
    </div>
  </div>
    

  <!--top_search_area end-->

  












  
  <!--div class="top_insta_area">
    <div class="top_insta_box">
    <h2>HOKUCABA NEWS</h2>  
      <div class="top_insta_box_in">
        <ul id="instafeed"></ul>
        <div id="clear"></div>
        <div class="top_pickup"><a href="" class="btn_1" title="<?php echo $seo; ?>">Instagram</a></div>     
      </div>
    </div>
  </div-->





  
</div><!--footer end-->


</div>

</main>


</div>
</div>

</body>

</html>