<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>Google広告代行｜格安ホームページ作成の「きゃばウェブ」｜初期費用0円。月額10,000円～</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ作成・制作「きゃばウェブ」のGoogle広告代行ページです。きゃばウェブはキャバクラ・ガールズバー・スナック・ラウンジなどナイトビジネスに対応したホームページを格安で作成します。">
<meta name="keywords" content="ホームページ,作成,制作,格安,キャバクラ,ガールズバー,Google広告代行">

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

<link rel="canonical" href="https://www.caba-web.com/ad.php">

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
    <h2>Google広告代行</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">

    <h3><span class="top_base_underline">Google広告を活用しよう</span></h3>
    <div class="service_in">
    <div class="concept_img">
    <img src="img/other_2.jpg">
    </div>
        
    <div class="ad_top">
    Google広告とはGoogleが提供しているクリック課金型の広告サービスです。<br />
    Googleで検索すると表示されるテキストの広告やイメージ広告などを指します。<br />
    <br />
    Google広告を活用することによってお店のPRや求人募集などGoogleを利用する多くの人にアピールすることが出来ます。<br />
    <br />
    きゃばwebではその中でも特に求人情報を中心にGoogle広告の代行を行っております。<br />
    <br />
    きゃばwebでは多くのナイトビジネスのGoogle広告を取り扱って来ましたので、ナイトビジネスに特化したデータや解析経験が豊富です。<br />
    <br />
    サイト公開後はGoogle広告を活用して求人募集など行ってみましょう。
    </div>
    
    <div class="top_price_box">
    <div class="top_price_1">
    <span style="font-size:40%;">代行・解析レポートが含まれます。</span><br />    
    <span style="font-size:50%;">月額費用</span> 10,000<span style="font-size:50%;">円</span><br />
    <span style="font-size:30%; color: #F33">広告費用は別途となります。</span>
    </div>
    </div>
    <div class="top_price_2">※価格は税抜です。</div>

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