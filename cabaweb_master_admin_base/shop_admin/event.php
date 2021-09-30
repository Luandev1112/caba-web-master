<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>カレンダー設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　カレンダー設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
	
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
			<h2>カレンダー設定</h2>
			<div class="page_base_in">				
				<div class="page_base_box">
					<h3>イベントを登録</h3>
					<div class="button_area_2"><a href="event_new.php" class="btn_main">新規イベント登録</a></div>
				</div>
				<div class="page_base_box_2">
					<h3>イベント・予定</h3>
					<div class="attention_1">
						イベント日を過ぎると自動で削除されます。
					</div>
					<div class="calendar_base">
						<div class="calendar_title">10月</div>
						<div id="shop_event">
							<table>
								<tr>
									<td class="data">1</td>
									<td class="naiyou"></td>
								</tr>
								<tr>
									<td class="data">2</td>
									<td class="naiyou"></td>
								</tr>
								<tr>
									<td class="data">3</td>
									<td class="naiyou"></td>
								</tr>
								<tr>
									<td class="data">4</td>
									<td class="naiyou">
										<div class="calendar_page_icon"><span style="color: #09F">Event</span></div>
										<div class="calendar_page_title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</div>
										<div class="news_button_box">
											<div class="wrapper">
												<div class="element_calendar"><a href="event_edit.php" class="btn_sub">イベントを編集</a></div>
												<div class="element_calendar"><a data-target="modal1" class="btn_sub modal_open">イベントを削除</a></div>
											</div>
											<!-- モーダル1 -->
											<div id="modal1" class="modal_box">
												<div class="modal_box_title">イベントを削除</div>
												<div class="cast_sakujyo">本当に削除しますか？</div>
												<div class="under_button_area_2"><a href="" class="formbtn_2">削除する</a></div>
												</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>												
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="data">5</td>
									<td class="naiyou"></td>
								</tr>
								<tr class="event sat">
									<td class="data">6</td>
									<td class="naiyou"></td>
								</tr>
								<tr class="event sun">
									<td class="data">7</td>
									<td class="naiyou"></td>
								</tr>
								<tr>
									<td class="data">8</td>
									<td class="naiyou">
										<div class="calendar_page_icon"><span style="color: #F00">Closed</span></div>
										<div class="calendar_page_title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</div>
										<div class="news_button_box">
											<div class="wrapper">
												<div class="element_calendar"><a href="event_edit.php" class="btn_sub">イベントを編集</a></div>
												<div class="element_calendar"><a data-target="modal2" class="btn_sub modal_open">イベントを削除</a></div>
											</div>
											<!-- モーダル1 -->
											<div id="modal2" class="modal_box">
												<div class="modal_box_title">イベントを削除</div>
												<div class="cast_sakujyo">本当に削除しますか？</div>
												<div class="under_button_area_2"><a href="" class="formbtn_2">削除する</a></div>
												</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>												
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="data">9</td>
									<td class="naiyou"></td>
								</tr>
								<tr>
									<td class="data">10</td>
									<td class="naiyou"></td>
								</tr>
								<tr>
									<td class="data">11</td>
									<td class="naiyou">
										<div class="calendar_page_icon"><span style="color: #F3C">Birthday</span></div>
										<div class="calendar_page_title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</div>
										<div class="news_button_box">
											<div class="wrapper">
												<div class="element_calendar"><a href="event_edit.php" class="btn_sub">イベントを編集</a></div>
												<div class="element_calendar"><a data-target="modal3" class="btn_sub modal_open">イベントを削除</a></div>
											</div>
											<!-- モーダル1 -->
											<div id="modal3" class="modal_box">
												<div class="modal_box_title">イベントを削除</div>
												<div class="cast_sakujyo">本当に削除しますか？</div>
												<div class="under_button_area_2"><a href="" class="formbtn_2">削除する</a></div>
												</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>												
											</div>
										</div>
									</td>
								</tr>								
							</table>
						</div>
						<div class="under_button_area_2"><a href="" class="btn_main">11月</a></div>
					</div><!--news_base-->  
				</div>			
			</div>
		</div>
		<?php include ('php/footer.php'); ?>
	
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