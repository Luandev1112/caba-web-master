<!doctype html>
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
    <h2>SYSTEM</h2>
  </div>
</div>

<div class="page_base_area_2">
  <div class="page_base">

    <div class="wrapper">
      <div class="element_system">
      <div class="system_page_table">
        <table>
          <tr>
            <td class="t_td0" colspan="2">
            1time 60min
            </td>
          </tr>
          <tr>
            <td class="t_td1">
            21:00～22:00
            </td>
            <td class="t_td2">
            ￥3,000
            </td>
          </tr>
          <tr>
            <td class="t_td1">
            22:00～23:00
            </td>
            <td class="t_td2">
            ￥4,000
            </td>
          </tr> 
          <tr>
            <td class="t_td1">
            23:00～LAST
            </td>
            <td class="t_td2">
            ￥5,000
            </td>
          </tr>                   
          <tr>
            <td class="t_td1">
            VIP
            </td>
            <td class="t_td2">
            ＋￥10,000
            </td>
          </tr>                                                                                
        </table>        
      </div>
      </div>
      <div class="element_system">
      <div class="system_page_table">
        <table>
          <tr>
            <td class="t_td0" colspan="2">
            OTHER
            </td>
          </tr>
          <tr>
            <td class="t_td1">
            指名料
            </td>
            <td class="t_td2">
            ￥1,000
            </td>
          </tr>
          <tr>
            <td class="t_td1">
            場内指名料
            </td>
            <td class="t_td2">
            ￥2,000
            </td>
          </tr>
          <tr>
            <td class="t_td1">
            同伴料
            </td>
            <td class="t_td2">
            ￥20,000
            </td>
          </tr>          
          <tr>
            <td class="t_td1">
            TAX・サービス料
            </td>
            <td class="t_td2">
            20%
            </td>
          </tr>                                                                                                           
        </table>                       
      </div>     
      </div>
    </div>
    <div class="system_page_box">
    ◆飲み放題<br />
    ビール・焼酎・ウィスキー・ソフトドリンク<br />
    <br />
    各種クレジットカードご利用頂けます。<br />
    <br />
    <img src="img/card.png" width="150px">
    </div>    

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