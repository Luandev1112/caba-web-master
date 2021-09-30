<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャバクラのホームページデモサイト</title>
<meta name="description" content="キャバクラのホームページデモサイト">
<meta name="keywords" content="キャバクラ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

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

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>HOT NEWS LIST</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">
    <div class="wrapper">
      <div class="element_1">
        <a href="hotnews_2.php">    
        <div class="top_hotnews_a">      
          <div class="top_hotnews_b">
            <div class="trimming"><img src="img/test_1.jpg" class="img_shadow"></div>
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
            <div class="trimming"><img src="img/ai-1.jpg" class="img_shadow"></div>
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
      <div class="element_1">
        <a href="hotnews_2.php">    
        <div class="top_hotnews_a">      
          <div class="top_hotnews_b">
            <div class="trimming"><img src="img/test_1.jpg" class="img_shadow"></div>
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
            <div class="trimming"><img src="img/ai-1.jpg" class="img_shadow"></div>
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
    

  </div><!--page_base-->  
</div><!--page_base_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>