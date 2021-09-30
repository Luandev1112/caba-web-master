<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>エリア一覧｜Admin Tool</title>
<meta name="description" content="管理画面ツール　エリア一覧">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	<div id="top_fade">	
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_base">
				<h2>エリア一覧</h2>
				<div class="page_base_in">
					<div class="page_base_box">
						<h3>新規エリアを登録</h3>
						<div class="button_area_2"><a href="area_new.php" class="btn_main">新規エリアを登録</a></div>
					</div>
					<div class="page_base_box_2">				
						<h3>インスタ更新</h3>
						<div class="client_search_line"></div>
						
					  <div class="wrapper">
					    <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">群馬エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=1" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=1" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">栃木エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=2" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=2" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">埼玉エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=3" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=3" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">長野エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=4" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=4" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">富山エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=5" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=5" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">新潟エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=6" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=6" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">石川エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=7" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=7" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">東京エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=8" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=8" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">山梨エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=9" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=9" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">神奈川エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=10" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=10" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">熊本エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=11" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=11" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">千葉エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=12" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=12" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">愛知エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=13" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=13" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
						  <div class="element_arealist">
      <div class="top_news_box">
<div class="client_shop">兵庫エリア</div>
<div class="wrapper">
          <div class="element_news_a">
            <a href="insta_koshin.php?koshin_area=14" class="btn_sub" target="_blank">キャスト更新</a>
          </div>         
          <div class="element_news_b">
            <a href="insta_koshin2.php?koshin_area=14" class="btn_sub" target="_blank">店舗更新</a>
          </div>
          </div>
                 
        </div>     
						</div>
					  </div>
				</div>
				<?php include ('php/footer.php'); ?>
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
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
<!--モーダル　プラグイン-->
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
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>