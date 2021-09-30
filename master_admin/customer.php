<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$id = $_POST['id'];
	

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>顧客管理｜Admin Tool</title>
<meta name="description" content="管理画面ツール　顧客管理">

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

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>顧客管理</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box">
  <h3>顧客登録</h3>
    <div class="todayscast_button"><a href="customer_new.php" class="btn_2">顧客を登録</a></div>  
  </div>  
  
  <div class="page_base_box_2">
  <h3>顧客一覧</h3>
  
  <div class="wrapper">
	  <?php
$result=mysqli_query($sql, "SELECT * From `shop` ORDER by id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/basic_hensu.php');

//▽表示内容ここから

echo "<div class=\"element_customer\">
      <div class=\"customer_box\">
      <div class=\"customer_box_shop\">".$shop_name."</div>
      <div class=\"customer_box_data\">次回契約日：".$time1."<br />
      入金確認：\n";
	
	if($data1=='1'){
	echo '<span style="color: #00F; font-weight:900;">入金済</span><br />';
}elseif($data1=='2'){
	echo '<span style="color: #F00; font-weight:900;">未入金</span><br />';
}elseif($data1=='3'){
	echo '<span style="color: #C60; font-weight:900;">請求済み</span><br />';
}else{
	echo '<span style="color: #000; font-weight:900;">--</span><br />';
}
	
echo "入金案内表示：";
	
	if($data2=='1'){
	echo '<span style="color: #00F; font-weight:900;">非表示</span><br />';
}elseif($data2=='2'){
	echo '<span style="color: #F00; font-weight:900;">表示</span><br />';
}else{
	echo '<span style="color: #000; font-weight:900;">--</span><br />';
}
	echo "契約プラン：";
	
	if($data7=='0'){
	echo 'お手軽プラン<br />';
}elseif($data7=='1'){
	echo '機能充実プラン<br />';
}elseif($data7=='2'){
	echo '機能充実プラン Group<br />';
}elseif($data7=='3'){
	echo '機能充実プラン プラス<br />';
}elseif($data7=='4'){
	echo '機能充実プラン プラス Group<br />';
}else{
	echo '--<br />';
}
	echo "Web最終更新日：".$time2."<br />";
	
	echo "トップ画更新：";
	
	if($data5=='1'){
	echo '<span style="color: #F93; font-weight:900;">更新 残りあと1枚</span><br />';
}elseif($data5=='2'){
	echo '<span style="color: #F93; font-weight:900;">更新 残りあと2枚</span><br />';
}elseif($data5=='3'){
	echo '<span style="color: #F00; font-weight:900;">未更新</span><br />';
}elseif($data5=='4'){
	echo '<span style="color: #00F; font-weight:900;">更新済</span><br />';
}else{
	echo '<span style="color: #00F; font-weight:900;">未更新</span><br />';
}
echo "求人画像更新：";
	
	if($data6=='1'){
	echo '<span style="color: #F93; font-weight:900;">更新 残りあと1枚</span><br />';
}elseif($data6=='2'){
	echo '<span style="color: #F00; font-weight:900;">更新済</span><br />';
}elseif($data6=='3'){
	echo '<span style="color: #00F; font-weight:900;">未更新</span><br />';
}else{
	echo '<span style="color: #00F; font-weight:900;">未更新</span><br />';
}
echo "</div><div class=\"news_button_box\">
        <div class=\"top_cast_box_button_b\">
          <a href=\"".$url."\" target=\"_blank\" class=\"btn_hp\">店舗ホームページ</a>
        </div>
        <div class=\"clear\"></div>";
	
//写真登録・編集削除画面へ
echo <<<GOLGO
 <div class="top_cast_box_button_a">
          <a href="customer_edit.php?id=$id" class="btn_1">編集</a>
        </div>
        <div class="top_cast_box_button_a">
          <a data-target="modal_news_$id" class="btn_1 modal_open">削除</a>
        </div>
        <div class="clear"></div>
        <!-- モーダル1 -->
        <div id="modal_news_$id" class="modal_box">          
          <p>
            <div class="castschedule_modal_box_title">顧客を削除</div>
            <div class="cast_sakujyo">本当に削除しますか？</div>
            <div class="todayscast_button"><a href="rewrite2.php?id=$id" class="btn_2">削除する</a></div>
          </p>
          <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
        </div>
        <!--モーダル1--> 
      </div><!--news_button_box-->            
      </div><!--customer_box-->
    </div><!--element_customer-->
GOLGO;

}
?>
            

       
 
    
  </div><!--wrapper-->
  

    
  </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>