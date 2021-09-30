<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜キャストブログ管理</title>
<meta name="description" content="キャストブログ管理ツールトップ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

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

<body class="drawer drawer--left">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php" title="ブログ管理">ブログ管理</a></li>             
        <li><a class="drawer-brand" href="prof.php" title="プロフ設定">プロフ設定</a></li>
        <li><a class="drawer-brand" href="http://icd.main.jp/bizele-toyama/prof.php" target="_blank" title="プロフ確認">プロフ確認</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="login_top.php" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1>
    <li class="menu__single">
      <a href="login_top.php" title="ブログ管理">ブログ管理</a>
    </li>          
    <li class="menu__single">
      <a href="prof.php" title="プロフ設定">プロフ設定</a>
    </li>                  
    <li class="menu__single">
      <a href="http://icd.main.jp/bizele-toyama/prof.php" target="_blank" title="プロフ確認">プロフ確認</a>
    </li>
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>            
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="login_top.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div id="page_base">
  <h2>トップページ</h2>
  
<div class="page_base_in">

  <div class="page_base_box">
  <h3>名前のブログ</h3>
    <div class="todayscast_button"><a href="castblog_new.php" class="btn_2">ブログを投稿</a></div> 
  </div> 
  

  <div class="page_base_box_2">
  <h3>投稿ブログ一覧</h3>
  
  <div class="cast_people">
  ブログ投稿数<br />
  「20件」
  </div>

  <div class="castsort_attention">
  ※ブログの保存は最大60件までとなります。<br />
  <br />
  ※61件目から古い順に削除され復元はできません。
  </div>
  
  <div class="wrapper">
    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->

    <div class="element_1">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nophoto_1.jpg">
        </div>

      <div class="castblog_box_button">                            
          <div class="top_cast_box_button_a">
            <a href="castblog_photo.php" class="btn_1">写真編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="castblog_edit.php" class="btn_1">内容編集</a>
          </div>          
          <div class="clear"></div>
          <div class="top_cast_box_button_b">
            <a data-target="modal_delete_1" class="btn_1 modal_open">削除</a>
          </div>

            <!-- 削除モーダル1 -->
            <div id="modal_delete_1" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">ブログを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->            
            
        </div>
        <div class="castblog_box_ymd">2018.11.15 / 13:45</div>     
      </div><!--top_cast_box-->
    </div><!--element_1 end-->                                                    
                                    
  </div><!--wrapper-->
  
  <div class="castblog_box_page">1｜2｜3｜4｜5</div>

    
  </div><!--page_base_box-->

</div><!--base-->

</div>

<div id="footer">
  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>
  
  <div class="footer_in">
    <p>© 2019 caba web.</p>
  </div> 
</div>


</main>

</body>

</html>