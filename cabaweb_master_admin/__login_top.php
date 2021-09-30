<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜マスター管理ツール</title>
<meta name="description" content="マスター管理ツール　トップ">

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
			
			<div class="header_space">
				<div class="wrapper">
					<div class="element_sp_1"></div>
					<div class="element_sp_2 header_space_img">
						<h1><a href="login_top.php" title=""><img src="img/logo.svg" alt=""></a></h1>
					</div>
					<div class="element_sp_3">
						<div class="header_space_img_2">
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<header role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only"></span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">
					<ul class="drawer-menu">
						<li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php" title="ホーム">ホーム</a></li>
						<li><a class="drawer-brand" href="client.php" title="ニュース設定">顧客一覧</a></li>
						<li><a class="drawer-brand" href="group.php" title="グループ登録">グループ登録</a></li>
						<li><a class="drawer-brand" href="area.php" title="エリア登録">エリア登録</a></li>
						<li><a class="drawer-brand" href="logout.php" title="ログアウト">ログアウト</a></li>
					</ul>
				</nav>
			</header>
			<div class="header_space_sp"></div>
			
			<div id="page_base">
				<h2>マスタートップ</h2>
				
				<div class="page_base_in">
					<div class="top_portal_box">
						<h3>お知らせ設定</h3>						
						<div class="button_area_1"><a href="osirase_new.php" class="btn_main">新規お知らせを登録</a></div>
					</div>
					
					<div class="page_base_box_2">
						<h3>運営からのお知らせ一覧</h3>
						<div class="osirase_base">
							<div class="osirase_box">
								<div class="osirase_box_ymd_1">2019年07月02日<br /></div>
								<div class="osirase_box_title">【重要】キャストさんのInstagramご掲載の注意事項</div>
								<div class="wrapper">
									<div class="element_calendar"><a href="osirase_edit.php" class="btn_sub">編集</a></div>
									<div class="element_calendar"><a data-target="modal1" class="btn_sub modal_open">削除</a></div>
								</div>
								<!-- モーダル1 -->
								<div id="modal1" class="modal_box">
									<div class="modal_box_title">お知らせを削除</div>
									<div class="cast_sakujyo">本当に削除しますか？</div>
									<div class="under_button_area_2"><a href="" class="formbtn_2">削除する</a></div>
									</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>									
								</div>
							</div>
						
							<div class="osirase_box">
								<div class="osirase_box_ymd_1">2019年07月02日<br /></div>
								<div class="osirase_box_title">【重要】キャストさんのInstagramご掲載の注意事項</div>
								<div class="wrapper">
									<div class="element_calendar"><a href="osirase_edit.php" class="btn_sub">編集</a></div>
									<div class="element_calendar"><a data-target="modal2" class="btn_sub modal_open">削除</a></div>
								</div>
								<!-- モーダル1 -->
								<div id="modal2" class="modal_box">
									<div class="modal_box_title">お知らせを削除</div>
									<div class="cast_sakujyo">本当に削除しますか？</div>
									<div class="under_button_area_2"><a href="" class="formbtn_2">削除する</a></div>
									</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>									
								</div>								
							</div>
						</div>
					</div>				
				</div><!--base-->
			</div>
			<div id="footer">
				<div class="page-side">
					<p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
				</div>
				<div class="footer_in">
					<p>© 2020 cabaweb.</p>
				</div>
			</div>
		
		</div><!--drawer drawer--left-->
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