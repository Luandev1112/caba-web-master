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
<div id="" class="top-animation animated fadeOut"><img src="img/logo_2.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」"></div>
</div>
</div>

<div class="drawer drawer--left">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-menu_top"><a class="drawer-brand" href="/" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」"><img src="img/top.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」">ホーム</a></li>
        <li><a class="drawer-brand" href="castblog.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」キャストブログ"><img src="img/blog.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」キャストブログ">キャストブログ</a></li>
        <li><a class="drawer-brand" href="hotnews.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ホットニュース"><img src="img/news.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ホットニュース">ホットニュース</a></li>
        <li><a class="drawer-brand" href="ranking.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ランキング"><img src="img/ranking.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ランキング">ランキング</a></li>
        <li><a class="drawer-brand" href="pickup.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ピックアップショップ"><img src="img/pickup.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ピックアップ">ピックアップショップ</a></li>
        <li><a class="drawer-brand" href="newshop.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店"><img src="img/new.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店">新規掲載店</a></li>
        <!--li>
          <div class="wrapper_sidemenu">
            <div class="element_sidemenu"><a href="https://www.instagram.com/" title="<?php echo $seo; ?>Instagram"><img src="img/instagram.svg" alt="<?php echo $seo; ?>Instagram" /></a></div>
            <div class="element_sidemenu"><a href="https://www.facebook.com/" title="<?php echo $seo; ?>Facebook"><img src="img/facebook.svg" alt="<?php echo $seo; ?>Facebook" /></a></div>
            <div class="element_sidemenu"><a href="" title="<?php echo $seo; ?>Twitter"><img src="img/twitter.svg" alt="<?php echo $seo; ?>Twitter" /></a></div>
          </div>
        </li-->
      </ul>
    </nav>
  </header>



<main role="main">

<div id="global">
  <div class="menu_top">
    <h1><a href="index.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」"><img src="img/logo.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」"></a></h1>
    <div class="menu_top_search">
      <form id="kensaku_2" action="shoplist.php" method="get">
          <input id="input_2" type="text" name="freeword" placeholder="お店を検索..."><input id="submit_2" type="submit" value="">
          </form>
    </div>
  </div>

  <div class="menu_base">
  <ul class="menu">
    <li class="menu__mega">
      <a href="#" class="init-bottom" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」遊ぶお店検索"><span class="menu_asobu">遊ぶ</span>お店を探す</a>
      <ul class="menu__third-level">
        <div class="mega_title_asobu"><span class="mega_title_asobu_2">遊ぶ</span>お店を探す</div>
        <li>
          <div class="mega_btn_box">
            <a href="toyama/" class="mega_btn" title="富山 キャバクラ・スナック・ガールズバー">
            TOYAMA<br />
            <span class="mega_btn_sub">富山市らへん</span>
            </a>
          </div>
        </li>
        <li>
          <div class="mega_btn_box">
            <a href="takaoka/" class="mega_btn" title="高岡 キャバクラ・スナック・ガールズバー">
            TAKAOKA<br />
            <span class="mega_btn_sub">高岡市らへん</span>
            </a>
          </div>
        </li>
        <!--li>
          <div class="mega_btn_box_3">
            <a href="uozu/" class="mega_btn" title="魚津 キャバクラ・ガールズバー">
            UOZU<br />
            <span class="mega_btn_sub">魚津</span>
            </a>
          </div>
        </li>
        <li>
          <div class="mega_btn_box_4">
            <a href="kanazawa/" class="mega_btn" title="金沢 キャバクラ・ガールズバー">
            KANAZAWA<br />
            <span class="mega_btn_sub">金沢</span>
            </a>
          </div>
        </li-->
      </ul>
    </li>
    <li class="menu__mega_2">
      <a href="#" class="init-bottom" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」働くお店検索"><span class="menu_work">働く</span>お店を探す</a>
      <ul class="menu__third-level">
        <div class="mega_title_asobu"><span class="mega_title_work_2">働く</span>お店を探す</div>
        <li>
          <div class="mega_btn_box_2">
            <a href="toyama/work.php" class="mega_btn" title="富山 キャバクラ・スナック・ガールズバー求人情報">
            TOYAMA<br />
            <span class="mega_btn_sub">富山市らへん</span>
            </a>
          </div>
        </li>
        <li>
          <div class="mega_btn_box_2">
            <a href="takaoka/work.php" class="mega_btn" title="高岡 キャバクラ・スナック・ガールズバー求人情報">
            TAKAOKA<br />
            <span class="mega_btn_sub">高岡市らへん</span>
            </a>
          </div>
        </li>
        <!--li>
          <div class="mega_btn_box_3">
            <a href="uozu/work.php" class="mega_btn" title="魚津 キャバクラ・ガールズバー求人情報">
            UOZU<br />
            <span class="mega_btn_sub">魚津</span>
            </a>
          </div>
        </li>
        <li>
          <div class="mega_btn_box_4">
            <a href="kanazawa/work.php" class="mega_btn" title="金沢 キャバクラ・ガールズバー求人情報">
            KANAZAWA<br />
            <span class="mega_btn_sub">金沢</span>
            </a>
          </div>
        </li-->
      </ul>
    </li>
    <li class="menu__single">
      <a href="castblog.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」キャストブログ">キャストブログ</a>
    </li>
    <li class="menu__single">
      <a href="hotnews.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ホットニュース">ホットニュース</a>
    </li>
    <li class="menu__single">
      <a href="ranking.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ランキング">ランキング</a>
    </li>
    <li class="menu__single">
      <a href="pickup.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ピックアップショップ">ピックアップショップ</a>
    </li>
    <li class="menu__single">
      <a href="newshop.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店">新規掲載店</a>
    </li>
  </ul>
  </div><!--menu_base-->
</div><!--グローバル end-->

<div class="header_space">
  <div class="header_space_img">

    <div class="inner">
      <div id="mobile-head">
        <div id="nav-toggle">
          <div>
            <img src="img/search.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」お店検索"><br />
            <span class="mobile-head_img_u">お店検索</span>
          </div>
        </div>
      </div>
      <nav id="global-nav">
        <div class="accordion">
          <div class="mega_sp_box">
            <div class="mega_title_asobu"><span class="mega_title_asobu_2">遊ぶ</span>お店を探す</div>
            <div class="wrapper_2">
              <div class="element_sp_mega">
                <a href="toyama/" class="" title="富山 キャバクラ・スナック・ガールズバー">
                  <div class="mega_btn_box_sp">
                  TOYAMA<br />
                  <span class="mega_btn_sp_sub">富山市らへん</span>
                  </div>
                </a>
              </div><!--element_sp_mega-->
              <div class="element_sp_mega">
                <a href="takaoka/" class="" title="高岡 キャバクラ・スナック・ガールズバー">
                  <div class="mega_btn_box_sp">
                  TAKAOKA<br />
                  <span class="mega_btn_sp_sub">高岡市らへん</span>
                  </div>
                </a>
              </div><!--element_sp_mega-->
              <!--div class="element_sp_mega">
                <a href="uozu/" class="" title="魚津 キャバクラ・ガールズバー">
                  <div class="mega_btn_box_sp">
                  UOZU<br />
                  <span class="mega_btn_sp_sub">魚津</span>
                  </div>
                </a>
              </div--><!--element_sp_mega-->
              <!--div class="element_sp_mega">
                <a href="kanazawa/" class="" title="金沢 キャバクラ・ガールズバー">
                  <div class="mega_btn_box_sp">
                  KANAZAWA<br />
                  <span class="mega_btn_sp_sub">金沢</span>
                  </div>
                </a>
              </div--><!--element_sp_mega-->
            </div><!--wrapper_2-->

          </div><!--mega_sp_box-->
          <div class="mega_sp_box_2">
            <div class="mega_title_asobu"><span class="mega_title_work_2">働く</span>お店を探す</div>
            <div class="wrapper_2">
              <div class="element_sp_mega">
                <a href="toyama/work.php" class="" title="富山 キャバクラ・スナック・ガールズバー求人情報">
                  <div class="mega_btn_box_sp_rec">
                  TOYAMA<br />
                  <span class="mega_btn_sp_sub">富山市らへん</span>
                  </div>
                </a>
              </div><!--element_sp_mega-->
              <div class="element_sp_mega">
                <a href="takaoka/work.php" class="" title="高岡 キャバクラ・スナック・ガールズバー求人情報">
                  <div class="mega_btn_box_sp_rec">
                  TAKAOKA<br />
                  <span class="mega_btn_sp_sub">高岡市らへん</span>
                  </div>
                </a>
              </div><!--element_sp_mega-->
              <!--div class="element_sp_mega">
                <a href="uozu/work.php" class="" title="魚津 キャバクラ・ガールズバー求人情報">
                  <div class="mega_btn_box_sp">
                  UOZU<br />
                  <span class="mega_btn_sp_sub">魚津</span>
                  </div>
                </a>
              </div--><!--element_sp_mega-->
              <!--div class="element_sp_mega">
                <a href="kanazawa/work.php" class="" title="金沢 キャバクラ・ガールズバー求人情報">
                  <div class="mega_btn_box_sp">
                  KANAZAWA<br />
                  <span class="mega_btn_sp_sub">金沢</span>
                  </div>
                </a>
              </div--><!--element_sp_mega-->
            </div><!--wrapper_2-->
          </div><!--mega_sp_box_2-->
          <div class="mega_sp_box_3">
            <div id="kensaku_box">

              <form id="kensaku_1" action="shoplist.php" method="get">
              <input id="input_1" type="text" name="freeword" placeholder="お店を検索..."><input id="submit_1" type="submit" value="">
              </form>
            </div>
          </div><!--mega_sp_box_2-->

        </div><!--accordion-->
      </nav>
    </div>


  <a href="index.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」"><img src="img/logo.svg" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」"></a></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div class="bxslider2">
  <div class="bxslider">
    <ul>
		<?php
	$result=mysqli_query($sql, "SELECT * From `data2` WHERE `name2` = 'slider'");

while($row=mysqli_fetch_assoc($result)){
include('master_admin/parts/basic_hensu8.php');

	if($photo1 == $empty){
	echo "";
}else{
		if($link1 == $empty){
	echo "<li><img src=\"master_admin/".$photo1.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link1."\"><img src=\"master_admin/".$photo1.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo2 == $empty){
	echo "";
}else{
		if($link2 == $empty){
	echo "<li><img src=\"master_admin/".$photo2.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link2."\"><img src=\"master_admin/".$photo2.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo3 == $empty){
	echo "";
}else{
		if($link3 == $empty){
	echo "<li><img src=\"master_admin/".$photo3.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link3."\"><img src=\"master_admin/".$photo3.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo4 == $empty){
	echo "";
}else{
		if($link4 == $empty){
	echo "<li><img src=\"master_admin/".$photo4.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link4."\"><img src=\"master_admin/".$photo4.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo5 == $empty){
	echo "";
}else{
		if($link5 == $empty){
	echo "<li><img src=\"master_admin/".$photo5.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link5."\"><img src=\"master_admin/".$photo5.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo6 == $empty){
	echo "";
}else{
		if($link6 == $empty){
	echo "<li><img src=\"master_admin/".$photo6.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link6."\"><img src=\"master_admin/".$photo6.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo7 == $empty){
	echo "";
}else{
		if($link7 == $empty){
	echo "<li><img src=\"master_admin/".$photo7.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link7."\"><img src=\"master_admin/".$photo7.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo8 == $empty){
	echo "";
}else{
		if($link8 == $empty){
	echo "<li><img src=\"master_admin/".$photo8.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link8."\"><img src=\"master_admin/".$photo8.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo9 == $empty){
	echo "";
}else{
		if($link9 == $empty){
	echo "<li><img src=\"master_admin/".$photo9.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link9."\"><img src=\"master_admin/".$photo9.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
	if($photo10 == $empty){
	echo "";
}else{
		if($link10 == $empty){
	echo "<li><img src=\"master_admin/".$photo10.".jpg?\" alt=\"".$seo."\" /></li>";
}else{
		echo "<li><a href=\"".$link10."\"><img src=\"master_admin/".$photo10.".jpg?\" alt=\"".$seo."\" /></a></li>";
	}
	}
}
	?>
    </ul>
  </div>
</div>

<div class="clear"></div>

<div id="main-contents">

<div class="top_base">
<!--img src="img/top1.jpg" alt="<?php echo $seo; ?>"-->

  <div class="top_pickup_area">
    <div class="top_pickup_area_box">
      <h2>PICK UP SHOP<br /><span class="h2_sub">ピックアップショップ</span></h2>
        <div class="wrapper">
			<?php
$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE hyouji='on' AND blank5='1' ORDER by rand() LIMIT 4 ");
while($row=mysqli_fetch_assoc($result)){
include('master_admin/parts/basic_hensu.php');


$result2=mysqli_query($sql, "SELECT * From `rec_tb` WHERE `r_title` = '$no' ORDER by r_title");
while($row=mysqli_fetch_assoc($result2)){
include('master_admin/parts/basic_hensu6.php');

//▽表示内容ここから

echo "<div class=\"element_1\">
            <div class=\"top_pickup_area_shop\">
            <a href=\"".$blank3."\" title=\"富山 キャバクラ「".$name."」\">\n";

	if($r_photo == $empty){
	echo "<img src=\"master_admin/photo/nophoto_4.jpg\"/>\n";
}else{
	echo "<img src=\"master_admin/".$r_photo.".jpg\" alt=\"".$r_title2."\"/>\n";
}


//△表示内容ここまで

	echo "<p>\n";

	if ($area == '1') {
	echo "富山";
}
	if ($area == '2') {
	echo "高岡";
}
		if ($area == '3') {
	echo "魚津";
}
		if ($area == '4') {
	echo "その他";
}
	echo " / ".$name."\n";


echo "</p></a></div></div>\n";
}
}
?>

        </div>

      <div class="top_pickup"><a href="pickup.php" class="btn_1" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ピックアップショップ一覧">PICK UP LIST</a></div>
    </div>
  </div><!--PICK UP end-->
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

$profinfo1_list = [];
$cphoto1_list = [];
$cast_url_list = [];

$shop_name_list = [];
$shop_area_list = [];

while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('admin/parts/basic_hensu2.php');

$profinfo1_list[] = $profinfo1;
$cphoto1_list[] = $cphoto1;
$cast_url_list[] = $cast_url;

$shop_result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE no='".$shop_no."' ORDER by id");
while($shop_row=mysqli_fetch_assoc($shop_result)){
	$shop_name_list[$shop_no][] = $shop_row["name"];
	$shop_area_list[$shop_no][] = $shop_row["area"];
}

//▽表示内容ここから
if( $i < $cnt ) {
	echo "".$insta1.",";
}else{
	 echo "".$insta1."";
}
++$i;
}

$profinfo1_json = json_encode($profinfo1_list, JSON_UNESCAPED_UNICODE);
$cphoto1_json = json_encode($cphoto1_list_list, JSON_UNESCAPED_UNICODE);
$cast_url_json = json_encode($cast_url_list, JSON_UNESCAPED_UNICODE);
$shop_name_json = json_encode($shop_name_list, JSON_UNESCAPED_UNICODE);
$shop_area_json = json_encode($shop_area_list, JSON_UNESCAPED_UNICODE);


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
		"profinfo1_list": '<?php echo $profinfo1_json; ?>',
		"cphoto1_list": '<?php echo $cphoto1_json; ?>',
		"cast_url_list": '<?php echo $cast_url_json; ?>',
		"shop_name_list": '<?php echo $shop_name_json; ?>',
		"shop_area_list": '<?php echo $shop_area_json; ?>',
    };
</script>

<div id="sb_instagram" class="sbi" data-settings="feed1"></div>

<script integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src='instagram-feed/js/sb-instagram-standalone-2.7.3.js' id='sb_instagram_standalone_scripts-js' type='text/javascript'></script>

		</div>
        <div class="top_pickup"><a href="pickup.php" class="btn_1" title="">PICK UP LIST</a></div>
    </div>
  </div>
  <div class="top_blog_area">
    <div class="top_blog_area_box">
      <div class="wrapper">
        <div class="element_topblog_1">
          <div class="top_blog_box">
            <h2>CAST BLOG<br /><span class="h2_sub">キャストブログ</span></h2>
            <div class="wrapper">
				<div class="list2">
	<ul><?php

$result=mysqli_query($sql, "SELECT * From `castblog` ORDER by blog_id DESC LIMIT 8");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('master_admin/parts/basic_hensu4.php');

//▽表示内容ここから

echo "<li><div class=\"element_topblog_in\">
                <a href=\"".$blog_blank3."/blog.php?blog_id=".$blog_id."\"><div class=\"top_blog_box_in\">
                <div class=\"trimming_blog blog_on\">\n";

	//写真を表示

	if($blog_photo == $empty){
	echo "<img src=\"master_admin/photo/nophoto_1.jpg\" class=\"img_shadow\" />\n";
}else{
	echo "<img src=\"master_admin/".$blog_photo.".jpg\" class=\"img_shadow\" />\n";
}

echo "<span><div class=\"top_blog_box_in_area_on\">";

$result2=mysqli_query($sql, "SELECT * From `shop_tb` WHERE no='".$blog_sort."' ORDER by id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result2)){
include('master_admin/parts/basic_hensu.php');

	if ($area == '1') {
	echo "富山";
}
	if ($area == '2') {
	echo "高岡";
}
		if ($area == '3') {
	echo "魚津";
}
		if ($area == '4') {
	echo "金沢";
}
	echo " / ".$name."</div>\n";

//△表示内容ここまで
	}

	echo "<div class=\"top_blog_box_in_name_on\">".$blog_blank."</div>
                </span>
                </div>
                <div class=\"top_blog_box_in_time\">".$blog_time."</div>
                </div><!--top_blog_box_in-->
                </a>
              </div><!--element_topblog_in--></li>";
}
?></ul><!-- /inner -->
</div><!-- /list -->
            </div><!--wapper-->
            <div class="top_pickup"><a href="castblog.php" class="btn_1" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」キャストブログ一覧">BLOG LIST</a></div>
          </div>
        </div><!--element_topblog_1-->

        <div class="element_topblog_2">
        <div class="top_hotnews_bg">
        <h2>HOT NEWS<br /><span class="h2_sub">店舗ホットニュース</span></h2>
        <div class="top_hotnews_box_in_a">
			<?php

$result=mysqli_query($sql, "SELECT * From `hotnews` ORDER by news_id DESC LIMIT 4");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('master_admin/parts/basic_hensu5.php');

//▽表示内容ここから

	$result2=mysqli_query($sql, "SELECT * From `shop_tb` WHERE no='".$shop_no2."' ORDER by id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result2)){
include('master_admin/parts/basic_hensu.php');

echo "<a href=\"".$news_blank2."/shop_hotnews_2.php?news_id=".$news_id."#hotnews\">
          <div class=\"top_hotnews_a\">
            <div class=\"top_hotnews_b\">
              <div class=\"trimming\">\n";


	//写真を表示

	if($news_photo == $empty){
	echo "<img src=\"master_admin/".$photo1.".jpg\" class=\"img_shadow\" alt=\"「".$news_blank."」ホットニュース\" />\n";
}else{
	echo "<img src=\"master_admin/".$news_photo.".jpg\" class=\"img_shadow\" alt=\"「".$news_blank."」ホットニュース\"/>\n";
}

echo "</div></div>
            <div class=\"top_hotnews_c\">
              <div class=\"top_hotnews_category\">";




	if ($area == '1') {
	echo "富山";
}
	if ($area == '2') {
	echo "高岡";
}
		if ($area == '3') {
	echo "魚津";
}
		if ($area == '4') {
	echo "金沢";
}
	echo " / \n";
	if ($area2 == '1') {
	echo "キャバクラ";
}
	if ($area2 == '2') {
	echo "ガールズバー";
}
		if ($area2 == '3') {
	echo "ラウンジ・スナック";
}
		if ($area2 == '4') {
	echo "ラウンジ・スナック";
}




	echo "</div><div class=\"top_hotnews_shop\">".$news_blank."</div>\n";
	echo "<div class=\"top_hotnews_title\">".$news_text."</div>
              <div class=\"top_hotnews_ymd\">".$news_time."</div>
            </div>
          </div>
          </a>
          <div class=\"clear\"></div>";
//△表示内容ここまで
	}
}

?>

          <div class="top_pickup_2"><a href="hotnews.php" class="btn_1" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ホットニュース一覧">HOT NEWS LIST</a></div>
        </div><!--top_hotnews_box_in_a-->
        </div><!--top_hotnews_bg-->
        </div>

        <!--div class="element_topblog_2">
          <div class="top_blog_box_2">
            <img src="img/caba_5.jpg" class=""><br />
            <img src="img/caba_6.jpg" class=""><br />
            <img src="img/caba_7.jpg" class=""><br />
          </div>
        </div--><!--element_topblog_2-->

      </div>
    </div>
  </div>

  <div class="top_search_area">
  <div class="top_search_box">

  <h2>AREA SEARCH<br /><span class="h2_sub">エリアからお店検索</span></h2>
  <div class="top_search_box_in">
  <div class="wrapper_2">
    <div class="element_3">
      <a href="toyama/" title="富山 キャバクラ・ガールズバー・スナック">
      <div class="top_search_button_box">
        TOYAMA<br />
        <span class="top_search_button_box_sub">富山市らへん</span>
      </div>
      </a>
    </div>
    <div class="element_3">
      <a href="takaoka/" title="高岡 キャバクラ・ガールズバー・スナック">
      <div class="top_search_button_box">
        TAKAOKA<br />
        <span class="top_search_button_box_sub">高岡市らへん</span>
      </div>
      </a>
    </div>
    <!--div class="element_3">
      <a href="uozu/" title="魚津 キャバクラ・ガールズバー・スナック">
      <div class="top_search_button_box_3">
        UOZU<br />
        <span class="top_search_button_box_sub">魚津</span>
      </div>
      </a>
    </div>
    <div class="element_3">
      <a href="kanazawa/" title="金沢 キャバクラ・ガールズバー・スナック">
      <div class="top_search_button_box_4">
        KANAZAWA<br />
        <span class="top_search_button_box_sub">金沢</span>
      </div>
      </a>
    </div-->
  </div><!--wrapper_2 end-->

  <div class="top_search_under">
  <div align="center">
  <form id="kensaku_2" action="shoplist.php" method="get">
          <input id="input_2" type="text" name="freeword" placeholder="お店を検索..."><input id="submit_2" type="submit" value="">
          </form>
  </div>
  </div>

  </div><!--top_search_box_in end-->

  </div><!--top_search_box-->
  </div><!--top_search_area end-->

  <div class="top_hotnews_area">
  <div class="top_hotnews_box">
    <div class="wrapper">
      <div class="element_2">
        <div class="top_ranking_bg">
        <h2>RANKING<br /><span class="h2_sub">ランキング</span></h2>
        <div class="top_hotnews_box_in_a">
          <div class="top_ranking_title">キャストランキング</div>
            <div class="wrapper_2">
				<?php

$result=mysqli_query($sql, "SELECT user_no,count(*) AS COUNT From access GROUP BY user_no ORDER BY COUNT DESC LIMIT 3");
$cnt=mysqli_num_rows($result);
$i=1;
while($row=mysqli_fetch_assoc($result)){
include('master_admin/parts/basic_hensu9.php');

//▽表示内容ここから

	$result2=mysqli_query($sql, "SELECT * From `cast_td` WHERE castname='".$user_no."' ORDER by cast_id");
while($row=mysqli_fetch_assoc($result2)){
include('master_admin/parts/basic_hensu2.php');

	echo "<div class=\"element_topranking\">\n";
	echo "<a href=\"".$cast_url."\" title=\"富山 キャバクラ「".$shop_name."」".$profinfo1."\">\n";

	echo "<div class=\"top_ranking_box\"><div class=\"top_ranking_box_no$i\">No.$i</div>\n";

	if($cphoto1 == $empty){
	echo "<img src=\"master_admin/photo/nophoto_1.jpg\" class=\"img_shadow\" />\n";
}else{
	echo "<img src=\"master_admin/".$cphoto1.".jpg\" class=\"img_shadow\" />\n";
}
	echo "<div class=\"top_ranking_box_shopname\">".$shop_name."</div>\n";
	echo "<div class=\"top_ranking_box_name\">".$profinfo1."</div></div></a></div>\n";


}
$i++;
	}


?>

            </div><!--wrapper_2-->
          <div class="top_ranking_title_2">ショップランキング</div>
            <div class="wrapper_2">
				<?php

$result=mysqli_query($sql, "SELECT user_no_2,count(*) AS COUNT From access2 GROUP BY user_no_2 ORDER BY COUNT DESC LIMIT 3");
$cnt=mysqli_num_rows($result);
$i=1;
while($row=mysqli_fetch_assoc($result)){
include('master_admin/parts/basic_hensu10.php');

//▽表示内容ここから



	$result2=mysqli_query($sql, "SELECT * From `shop_tb` WHERE shop='".$user_no_2."' ORDER by id");
while($row=mysqli_fetch_assoc($result2)){
include('master_admin/parts/basic_hensu.php');


	echo "<div class=\"element_topranking\">\n";
	echo "<a href=\"".$blank3."\" title=\"富山 キャバクラ「".$name."」\">\n";

	echo "<div class=\"top_ranking_box\"><div class=\"top_ranking_box_no$i\">No.$i</div>\n";

	if($photo1 == $empty){
	echo "<img src=\"master_admin/photo/nophoto_1.jpg\" class=\"img_shadow\" />\n";
}else{
	echo "<img src=\"master_admin/".$photo1.".jpg\" class=\"img_shadow\" />\n";
}
	echo "<br><div class=\"top_ranking_box_shopname_2\">".$name."</div>\n";
	echo "</div></a></div>\n";


}
$i++;
	}


?>
            </div><!--wrapper_2-->

          <div class="top_pickup"><a href="ranking.php" class="btn_1" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ランキング一覧">MORE</a></div>

        </div><!--top_hotnews_box_in_a-->
      </div><!--top_ranking_bg-->
      </div><!--element_2-->

      <div class="element_2">
        <div class="top_newshop_bg">
        <h2>NEW SHOP<br /><span class="h2_sub">新規掲載店</span></h2>
        <div class="top_hotnews_box_in_a">
			<?php

$result=mysqli_query($sql, "SELECT * From `new_tb` ORDER by new_id DESC LIMIT 4");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('master_admin/parts/basic_hensu7.php');

//▽表示内容ここから

echo "<a href=\"".$n_blank."\">
          <div class=\"top_hotnews_a\">
            <div class=\"top_hotnews_b\">
              <div class=\"trimming\">\n";


	//写真を表示

	if($n_photo == $empty){
	echo "<img src=\"master_admin/photo/nophoto_1.jpg\" class=\"img_shadow\" />\n";
}else{
	echo "<img src=\"master_admin/".$n_photo.".jpg\" class=\"img_shadow\" />\n";
}

echo "</div></div>
            <div class=\"top_hotnews_c\">
              <div class=\"top_hotnews_category\">";

$result2=mysqli_query($sql, "SELECT * From `shop_tb` WHERE no='".$n_title."' ORDER by id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result2)){
include('master_admin/parts/basic_hensu.php');


	if ($area == '1') {
	echo "富山";
}
	if ($area == '2') {
	echo "高岡";
}
		if ($area == '3') {
	echo "魚津";
}
		if ($area == '4') {
	echo "金沢";
}
	echo " / \n";
	if ($area2 == '1') {
	echo "キャバクラ";
}
	if ($area2 == '2') {
	echo "ガールズバー";
}
		if ($area2 == '3') {
	echo "スナック・パブ";
}
		if ($area2 == '4') {
	echo "ラウンジ";
}

	echo "</div><div class=\"top_hotnews_shop\">".$name."</div>\n";

}

	echo "<div class=\"top_hotnews_title\">".$n_title2."</div>
              <div class=\"top_hotnews_ymd\">".$n_no."</div>
            </div>
          </div>
          </a>
          <div class=\"clear\"></div>";
//△表示内容ここまで
	}


?>

          <div class="top_pickup"><a href="newshop.php" class="btn_1" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店一覧">NEW SHOP LIST</a></div>
        </div><!--top_hotnews_box_in_a-->
        </div><!--top_newshop_bg-->
      </div><!--element_2-->

      <div class="element_2">
          <div class="top_blog_box_2">
            <a href="keisai.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店募集"><img src="img/top_banner_1.jpg" class="" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店募集"></a><br />
            <a href="keisai.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店募集"><img src="img/caba_7-2.jpg" class="" alt="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店募集"></a><br />
          </div>
      </div><!--element_2-->

    </div><!--wrapper-->

  </div>
  </div>













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






</div>


<div id="footer">

  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_box">
    <div class="footer_in">
      <!--div class="footer_in_1">
      <ul class="inline-block">
        <li><a href="https://www.facebook.com/" title=""><img src="img/facebook.svg" alt="" /></a></li>
        <li><a href="https://www.instagram.com/" title=""><img src="img/instagram.svg" alt="" /></a></li>
        <li><a href="https://twitter.com/" title=""><img src="img/twitter.svg" alt="" /></a></li>
      </ul>
      </div-->

      <div class="footer_in_comment">
      <div class="footer_in_comment_box">
      <div class="footer_in_comment_box_title">キャバラボって？</div>
      CABA LAB キャバラボとは北陸地方（富山・高岡・金沢）のキャバクラ・ガールズバー・ラウンジ・スナック・パブの店舗情報・求人情報が満載のサイトです。<br />
      キャバクラやガールズバー・スナックなど遊んだり楽しめるお店を探せることはもちろん、体験入店やアルバイトなど求人情報を掲載しているお店も探すことができます。<br />
      更にキャバ嬢やキャストさんの写真やグラビア・写メ日記を見ることができます。<br />
      遊ぶお店や働くお店を探すならキャバラボで決まり!!
      </div>
      </div>

      <div class="footer_in_sitemap">
      <div class="footer_in_sitemap_box">
      <div class="wrapper">
        <div class="element_sitemap">
        ・<a href="/" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」「キャバラボ」">トップページ</a><br />
        ・<a href="castblog.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」キャストブログ">キャストブログ</a><br />
        ・<a href="hotnews.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ホットニュース">ホットニュース</a><br />
        ・<a href="ranking.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ランキング">ランキング</a><br />
        ・<a href="pickup.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ピックアップショップ">ピックアップショップ</a><br />
        ・<a href="newshop.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」新規掲載店">新規掲載店</a><br />
        ・<a href="terms.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ご利用規約">ご利用規約</a><br />
        ・<a href="privacy.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」プライバシーポリシー">プライバシーポリシー</a><br />
        ・<a href="about.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」当サイトについて">当サイトについて</a></br />
        ・<a href="keisai.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」掲載について">掲載について</a>
        </div>
        <div class="element_sitemap">
        ・<a href="toyama/" title="富山 キャバクラ・スナック・ガールズバーお店情報">富山市らへんのキャバクラ・ガールズバー店舗情報</a><br />
        ・<a href="toyama/work.php" title="富山 キャバクラ・スナック・ガールズバー求人情報">富山市らへんのキャバクラ・ガールズバー求人情報</a><br />
        ・<a href="takaoka/" title="高岡 キャバクラ・スナック・ガールズバーお店情報">高岡市らへんのキャバクラ・ガールズバー店舗情報</a><br />
        ・<a href="takaoka/work.php" title="高岡 キャバクラ・スナック・ガールズバー求人情報">高岡市らへんのキャバクラ・ガールズバー求人情報</a><br />
          </div>
        </div>
      </div>
      </div>

      <!--div class="footer_in_2">
      <div class="wrapper_2">
        <div class="element_4">
          <a href="" target="_blank" title=""><img src="img/cabacaba.jpg"></a>
        </div>
        <div class="element_4">
          <a href="" target="_blank"><img src="img/house.jpg"></a>
        </div>
        <div class="element_4">
          <a href=""><img src="img/gaicaba_f.jpg"></a>
        </div>
      </div>
      </div-->

      <div class="footer_in_2">
      <div class="wrapper_2">
        <div class="element_3-2">
          <a href="terms.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」ご利用規約" class="btn_2">ご利用規約</a>
        </div>
        <div class="element_3-2">
          <a href="privacy.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」プライバシーポリシー" class="btn_2">プライバシーポリシー</a>
        </div>
        <div class="element_3-2">
          <a href="about.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」当サイトについて" class="btn_2">当サイトについて</a>
        </div>
        <div class="element_3-2">
          <a href="keisai.php" title="富山・高岡・金沢のキャバクラ・スナックのナイト求人･情報サイト「キャバラボ」掲載について" class="btn_2">掲載について</a>
        </div>
      </div>
      </div>

      <p>
      当サイトは18歳未満の方の閲覧を固くお断りいたします。写真等の無断転用・無断転載は一切禁止です。<br />
      <br />
      © 2019 caba lab.
      </p>
    </div>
  </div>

</div><!--footer end-->


</div>

</main>


</div>
</div>

</body>

</html>
