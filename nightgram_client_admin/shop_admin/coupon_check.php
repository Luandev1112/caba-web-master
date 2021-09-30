<?php
//セッションの復元
session_start();

	//設定ファイル読み込み
	require_once '../conf.php';

//ファンクションファイル読み込み
require_once '../parts/function.php';


//フォームからデータ受け取り
$coupon_id = $_POST['coupon_id'];

$coupon1 = htmlspecialchars($_POST['coupon1'],ENT_QUOTES);
$coupon2 = htmlspecialchars($_POST['coupon2'],ENT_QUOTES);
$coupon3 = htmlspecialchars($_POST['coupon3'],ENT_QUOTES);
$coupon_shop = $_POST['coupon_shop'];
//データを整形
$coupon3 = mb_convert_kana($coupon3,'KaV','utf-8');

//追加
$coupon3 = str_replace('\\' , '' , $coupon3);
//改行コードの前に改行タグを入れる
$coupon3 = nl2br($coupon3);
//改行コードを削除
$coupon3 = str_replace("\r\n" , "" , $coupon3);

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `data5` = '$coupon_shop'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>クーポン確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　クーポン確認">

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
				<h2>クーポン確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
						</div>
						<form action="coupon_write.php" method="post" id="form">
							<p>
								<label>
									<span>■クーポン内容</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $coupon1; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■有効期限</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $coupon2; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■注意事項</span>
									<span style="font-size: 80%; color: #4D4D4D;">
										<?php echo $coupon3; ?>
									</span>
								</label>
							</p><input type="hidden" name="coupon_id" value="<?php echo $coupon_id; ?>" />
<input type="hidden" name="coupon1" value="<?php echo $coupon1; ?>" />
		<input type="hidden" name="coupon2" value="<?php echo $coupon2; ?>" />
		<input type="hidden" name="coupon3" value="<?php echo $coupon3; ?>" />
		<input type="hidden" name="coupon_shop" value="<?php echo $coupon_shop; ?>" />
							<input type="hidden" name="no" value="<?php echo $no; ?>" />
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>	
				</div>
			</div>
			<?php include ('php/footer.php'); ?>
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