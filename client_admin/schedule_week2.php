<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
include('parts/function.php');

$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu.php');
	
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>1週間 出勤設定｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　1週間 出勤設定">

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
  <h2>1週間 出勤設定</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
  <h3>キャスト出勤設定</h3>
  
  <div class="wrapper"><!--element_1 end-->
<?php
$result=mysqli_query($sql, "SELECT * From `data` WHERE yobi1='$shop_id' ORDER by id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){

include('parts/basic_hensu.php');
include('parts/starttime_conversion2.php');	/* 出勤開始時間を変換 */
include('parts/schetime.php');

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

echo "<div class=\"element_cast\">
      <div class=\"top_cast_box\"><div class=\"top_cast_box_wrap\">\n";

	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"photo/nophoto_1.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}
echo "</div>".$getdays."<div class=\"top_cast_box_button\">";
if($option1=='1'){
	echo '<div class="todayscast_hyouji">表示中</div>';
}elseif($option1=='2'){
	echo '<div class="todayscast_hyouji_no">非表示</div>';
}else{
	echo '<div class="todayscast_hyouji">表示中</div>';
}
	//写真を表示
				
echo "<a data-target=\"modal".$name2."\" class=\"btn_1 modal_open\">1週間 出勤設定</a>\n";


echo "<div id=\"modal".$name2."\" class=\"modal_box\">          
              <p>
                <div class=\"castschedule_modal_box_title\">".$name."の出勤設定</div>
                <form action=\"schedule_rewrite.php\" method=\"post\">
				<input type=\"hidden\" name=\"id\" value=\"".$id."\" />
<input type=\"hidden\" name=\"name2\" value=\"".$name2."\" />
<input type=\"hidden\" name=\"yobi1\" value=\"".$yobi1."\" />
<input type=\"hidden\" name=\"edittime\" value=\"".$edi."\" />
                <table>
                  <tr>
                    <td class=\"t_td4\">".$day1."(".$week1.")</td>
                    <td class=\"t_td5\">";

	
$getdays=getDays($tdy_8dig,$yobi7);

if($getdays<1){
	if($yobi9==$edi){
		if ($yotei1 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
			
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}
	}else{
		
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
	}
}else{
if ($yotei1 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}
}
	


echo "</tr>\n";
echo <<<GOLGO
 <tr>
                    <td class="t_td4">$day2($week2)</td>
                    <td class="t_td5">
GOLGO;
if($getdays<2){
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei2" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei2 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei2" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei2 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei2" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei2 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei2" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei2" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
}
}
echo "</tr>\n";
echo <<<GOLGO
 <tr>
                    <td class="t_td4">$day3($week3)</td>
                    <td class="t_td5">
GOLGO;
if($getdays<3){
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei3" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei3 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei3" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei3 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei3" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei3 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei3" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei3" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_td4">$day4($week4)</td>
                    <td class="t_td5">
GOLGO;
	
if($getdays<4){
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei4 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei4 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei4 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_td4">$day5($week5)</td>
                    <td class="t_td5">
GOLGO;
if($getdays<5){
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei5" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei5 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei5" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei5 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei5" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei5 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei5" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei5" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_td4">$day6($week6)</td>
                    <td class="t_td5">
GOLGO;
if($getdays<6){
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei6" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei6 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei6" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei6 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei6" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei6 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei6" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yotei6" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_td4">$day7($week7)</td>
                    <td class="t_td5">
GOLGO;
if($getdays<7){
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yobi4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yobi4== '2') {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yobi4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yobi4 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yobi4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yobi4 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yobi4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_td6">
<label><input type="radio" name="yobi4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr></table>\n";
	$time1 = date('Ymd' , time() + (144+$jisa)*3600);
	$time2 = date('md' , time() + $jisa*3600);
	echo " <div class=\"todayscast_button_2\"><input type=\"hidden\" name=\"operation\" value=\"edit\" />
	<input type=\"hidden\" name=\"yobi7\" value=\"".$time1."\" />
      <input type=\"hidden\" name=\"yobi9\" value=\"".$time2."\" />
                  <button type=\"submit\" class=\"formbtn_2\">出勤を送信</button>
                </div>
              </form>
            </p>
            <p><a class=\"modal_close\"><i class=\zmdi zmdi-close\">✕<br></i></a></p>
          </div>\n";
            
	echo <<<GOLGO
<table><tr><td class="t_td1">
            $day1($week1)</td>
GOLGO;
	
	$getdays=getDays($tdy_8dig,$yobi7);


if($getdays<1){
	if($yobi9==$edi){
		if ($yotei1 == '2') {
echo "<td class=\"t_td3\">お休み</td>";
} elseif ($yotei1 == '3') {
echo "<td class=\"t_td2\">出勤</td>";
}elseif ($yotei1 == '1') {
echo "<td class=\"t_td2\">出勤</td>";
} else {
echo "<td class=\"t_td3\">お休み</td>";
}
	}else{
echo "<td class=\"t_td3\">お休み</td>";
	}
}else{
if ($yotei1 == '2') {
echo "<td class=\"t_td3\">お休み</td>";
} elseif ($yotei1 == '3') {
echo "<td class=\"t_td2\">出勤</td>";
}elseif ($yotei1 == '1') {
echo "<td class=\"t_td2\">出勤</td>";
} else {
echo "<td class=\"t_td3\">お休み</td>";
}
}
echo "</tr>\n";
	
	echo <<<GOLGO
<tr><td class="t_td1">
            $day2($week2)</td>
GOLGO;
	

if($getdays<2){
echo "<td class=\"t_td3\">お休み</td>";
}else{
if ($yotei2 == '2') {
echo "<td class=\"t_td3\">お休み</td>";
} elseif ($yotei2 == '3') {
echo "<td class=\"t_td2\">出勤</td>";
}elseif ($yotei2 == '1') {
echo "<td class=\"t_td2\">出勤</td>";
} else {
echo "<td class=\"t_td3\">お休み</td>";
}
}
echo "</tr>\n";
	echo <<<GOLGO
<tr><td class="t_td1">
            $day3($week3)</td>
GOLGO;
	

if($getdays<3){
echo "<td class=\"t_td3\">お休み</td>";
}else{
if ($yotei3 == '2') {
echo "<td class=\"t_td3\">お休み</td>";
} elseif ($yotei3 == '3') {
echo "<td class=\"t_td2\">出勤</td>";
}elseif ($yotei3 == '1') {
echo "<td class=\"t_td2\">出勤</td>";
} else {
echo "<td class=\"t_td3\">お休み</td>";
}
}
echo "</tr></table></div>\n";
	
      echo " <div class=\"top_cast_box_name\">".$name."</div></div></div>\n";

}
//ソート関数の定義(登録日）
//function cmp($a,$b){
//return strcmp($a[0],$b[0]);
//}
?>                               
  </div><!--wrapper-->
  
  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>