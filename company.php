<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>会社概要｜格安ホームページ作成の「きゃばウェブ」｜初期費用0円。月額20,000円</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ作成・制作「きゃばウェブ」の会社概要ページです。きゃばウェブはキャバクラ・ガールズバー・スナック・ラウンジなどナイトビジネスに対応したホームページを格安で作成します。">
<meta name="keywords" content="ホームページ,作成,制作,格安,キャバクラ,ガールズバー,会社概要">

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

<link rel="canonical" href="https://www.caba-web.com/company.php">

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
    <h2>会社概要</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">
    <div class="service_in">
        <table>
          <tr>
            <td class="t_td_company1">
            会社名
            </td>
            <td class="t_td_company2">
            Monochrome Design Studio
            </td>
          </tr>
          <tr>
            <td class="t_td_company1">
            所在地
            </td>
            <td class="t_td_company2">
            群馬県前橋市天川大島町43 CASAセフィーロ1C
            </td>
          </tr>
          <tr>
            <td class="t_td_company1">
            お問合せ
            </td>
            <td class="t_td_company2">
            <a href="info@caba-web.com">お問合せはこちら</a>
            </td>
          </tr>
          <tr>
            <td class="t_td_company1">
            事業内容
            </td>
            <td class="t_td_company2">
            <font color="#1fb3a4">■</font> Web制作事業<br />
            <font color="#1fb3a4">■</font> 広告代理事業<br />
            <font color="#1fb3a4">■</font> デザイン事業<br />
            <font color="#1fb3a4">■</font> マーケティング事業<br />
            <font color="#1fb3a4">■</font> システム開発事業<br />
            </td>
          </tr>                                                                                                                                          
        </table>  
    </div>
  </div>
</div>

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