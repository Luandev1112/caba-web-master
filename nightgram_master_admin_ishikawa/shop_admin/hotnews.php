<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
//ファンクションファイル読み込み
require_once '../parts/function.php';

$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	include('../parts/area_link_job.php');
}


$result=mysqli_query($sql3, "SELECT * From `shop` WHERE `login_id` = '$data5'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu_shop.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　ニュース設定">

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
			<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">ニュース設定</span></h2>
			<div class="page_base_in">
				<div class="page_base_box">
					<h3>新規ニュースを登録</h3>
					<div class="button_area_2"><a href="hotnews_new.php?no=<?php echo $no; ?>" class="btn_main">新規ニュース登録</a></div>
				</div>
				<div class="page_base_box_2">				
					<h3>ニュース一覧</h3>
					<div class="cast_people">現在のニュース登録数<br />「<?php
 $result=mysqli_query($sql2, "SELECT * From `news` WHERE (sort>='$news_today' or sort='') AND blank='$data5' AND link='1' ORDER by sort_order");
$cnt=mysqli_num_rows($result);
						
echo $cnt;

if ($cnt == '0') {
	echo '0';
}
						
	
?>件」</div>
					<div class="wrapper">
						<?php
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('../parts/basic_hensu5.php');


//▽表示内容ここから

echo "<div class=\"element_news\"><div class=\"top_news_box\"><div class=\"photo_thumbs\">\n";


	//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto_1.jpg\" class=\"lozad\" alt=\"\">\n";
}else{
		if($photo_box == '1'){
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}elseif($photo_box == '3'){
	echo "<img src=\"\" data-src=\"https://www.nightgram.com/master_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}elseif($photo_box == ''){
echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}
}
echo "</div><div class=\"top_news_box_time\">登録日：";
	
	echo date("Y.m.d",$news_no);

	echo "</div><div class=\"top_news_box_time_2\">掲載終了日：";
	
	if($start == ''){
	echo "なし\n";
}else{
		echo $start;
	}
	
	echo "</div>";
	echo "<div class=\"top_news_box_title\">".$newstitle."</div>";

//写真登録・編集削除画面へ
echo <<<GOLGO

<div class="wrapper">
									<div class="element_news_a"><a href="hotnews_photo.php?news_id=$news_id" class="btn_sub">画像設定</a></div>
									<div class="element_news_b"><a href="hotnews_edit.php?news_id=$news_id" class="btn_sub">内容編集</a></div>
									<div class="element_news_c"><a data-target="modal_delete_$news_id" class="btn_sub modal_open">削除</a></div>
								</div>
								<div id="modal_delete_$news_id" class="modal_box">
									<p>
									<div class="modal_box_title">ニュースを削除</div>
									<div class="cast_sakujyo">本当に削除しますか？</div>
									<div class="under_button_area_2"><a href="hotnews_rewrite2.php?news_id=$news_id&no=$no" class="formbtn_2">削除する</a></div>
									</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
							</div>
						</div>
					</div>

GOLGO;
	
	
	
//△表示内容ここまで

}
?>
				  </div>
			</div>
		</div>
		<?php include ('php/footer.php'); ?>
</div>
</div><!--drawer drawer--left-->

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