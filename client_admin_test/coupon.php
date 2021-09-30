<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>クーポン設定｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　クーポン設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/iziModal.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

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

<script>
$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  $('.modal_open').click(function(){
 
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  });
});
</script>

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>クーポン設定</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box">
  <h3>新規クーポン登録</h3>
    <div class="todayscast_button"><a href="coupon_new.php" class="btn_2">クーポンを登録</a></div> 
  </div>
  
  <div class="page_base_box_2">
  <h3>アップ中のクーポン</h3>
  
  <div class="coupon_page_box">  
    <div class="coupon_page_ticket_box_base">
      <div class="coupon_page_ticket_box">
        <div class="coupon_page_ticket_box_1">1time料金 5%OFF</div>
        <div class="coupon_page_ticket_box_2">有効期限：2019年3月15日まで</div>
        <div class="coupon_page_ticket_box_3">
        ※1time料金が5%OFFになります。<br />
        ※他の割引と併用は出来ません。<br />
        ※お会計前にこちらの画面を必ずご提示して下さい。
        </div>

    <div class="news_button_box">
      <div class="top_cast_box_button_a">
        <a href="coupon_edit.php" class="btn_1">クーポンを編集</a>
      </div>
      <div class="top_cast_box_button_a">
        <a data-target="modal_news_1" class="btn_1 modal_open">クーポンを削除</a>
      </div>
      <div class="clear"></div>      
      <!-- モーダル1 -->
        <div id="modal_news_1" class="modal_box">          
          <p>
            <div class="castschedule_modal_box_title">クーポンを削除</div>
            <div class="cast_sakujyo">本当に削除しますか？</div>
            <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
          </p>
          <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
        </div>
      <!--モーダル1--> 
    </div><!--news_button_box-->
        
      </div><!--coupon_page_ticket_box-->
    </div><!--coupon_page_ticket_box_base-->

    <div class="coupon_page_ticket_box_base">
      <div class="coupon_page_ticket_box">
        <div class="coupon_page_ticket_box_1">1time料金 5%OFF</div>
        <div class="coupon_page_ticket_box_2">有効期限：2019年3月15日まで</div>
        <div class="coupon_page_ticket_box_3">
        ※1time料金が5%OFFになります。<br />
        ※他の割引と併用は出来ません。<br />
        ※お会計前にこちらの画面を必ずご提示して下さい。
        </div>

    <div class="news_button_box">
      <div class="top_cast_box_button_a">
        <a href="coupon_edit.php" class="btn_1">クーポンを編集</a>
      </div>
      <div class="top_cast_box_button_a">
        <a data-target="modal_news_1" class="btn_1 modal_open">クーポンを削除</a>
      </div>
      <div class="clear"></div>      
      <!-- モーダル1 -->
        <div id="modal_news_1" class="modal_box">          
          <p>
            <div class="castschedule_modal_box_title">クーポンを削除</div>
            <div class="cast_sakujyo">本当に削除しますか？</div>
            <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
          </p>
          <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
        </div>
      <!--モーダル1--> 
    </div><!--news_button_box-->
     
      </div><!--coupon_page_ticket_box-->
    </div><!--coupon_page_ticket_box_base-->
         
  </div><!--coupon_page_box--> 
    

      
  </div><!--page_base_box_2-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>