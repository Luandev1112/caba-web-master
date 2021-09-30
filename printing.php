<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>名刺・印刷物制作｜格安ホームページ作成の「きゃばウェブ」｜初期費用0円。月額10,000円～</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ作成・制作「きゃばウェブ」の名刺・印刷物制作ページです。きゃばウェブはキャバクラ・ガールズバー・スナック・ラウンジなどナイトビジネスに対応したホームページを格安で作成します。">
<meta name="keywords" content="ホームページ,作成,制作,格安,キャバクラ,ガールズバー,名刺・印刷物制作">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

<link rel="canonical" href="https://www.caba-web.com/printing.php">

<meta name="format-detection" content="telephone=no">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127337530-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127337530-1');
</script>

</head>

<body>

<div id="top_fade">
<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>名刺・印刷物制作</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">

    <h3><span class="top_base_underline">名刺・印刷物でお店をPR</span></h3>
    <div class="service_in">
      <div class="printing_img">
      <img src="img/other_3.jpg">
      </div>
      <div class="printing_top">
      「きゃばweb」では契約していただいているお客様限定で名刺・印刷物の制作を承っています。<br />
      ホームページと連動してお店のPRにもなります。<br />
      </div>
      <div class="printing_1">1. オリジナル名刺</div>
      <div class="printing_2">
      お店の空名刺やキャストさんの名刺の制作も承っています。<br />
      「キャスト写真撮影」と利用すればオリジナルの写真名刺も制作できます。<br />
      </div>
      <div class="printing_1">2. ポスター・POP制作</div>
      <div class="printing_2">
      イベント告知のポスターやPOPなどの制作も承っています。<br />
      ポスターやPOPを制作してお店のPRに活用できます。<br />
      </div>
      <div class="printing_3">料金は枚数やサイズによって異なりますので、まずはお気軽にお問合せ下さい。</div>
    
    </div><!--service_in-->    
    
  </div>
</div>

<div class="top_otherservice_bg">
<div class="top_base">
  <h2><span class="top_base_underline">その他サービス</span></h2>
  <div class="wrapper_2">
    <div class="element_other">
      <div class="top_otherservice_box">
      <a href="photo.php">
      <img src="img/other_1.jpg">
      </a>
      キャスト写真撮影
      </div>
    </div><!--element_other-->
    <div class="element_other">
      <div class="top_otherservice_box">
      <a href="ad.php">
      <img src="img/other_2.jpg">
      </a>
      Google広告代行
      </div>
    </div><!--element_other-->
    <div class="element_other">
      <div class="top_otherservice_box">
      <a href="printing.php">
      <img src="img/other_3.jpg">
      </a>
      名刺・印刷物制作
      </div>
    </div><!--element_other-->     
  </div>
  
</div><!--top_base-->
</div><!--top_otherservice_bg-->

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--right-->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.5/dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
  $('.drawer .drawer-dropdown-menu-item[href]:not([data-toggle])').on('click', function(event) {
    event.stopPropagation();
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