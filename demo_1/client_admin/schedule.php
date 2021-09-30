<?php
//セッションの復元
session_start();
//ログインチェック
require_once 'login_check.php';
//設定ファイル読み込み
require_once 'conf.php';
$id = $_POST['id'];
$name2 = $_POST['name2'];
include('parts/function.php');

$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu.php');
	
}
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>当日出勤設定｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　当日出勤設定">

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
<?php
$mode=$_POST['mode'];
if($mode=='write') {
//書き込み処理開始
$cnt=$_POST['cnt'];
$cnt--;
$cnttest=$cnt;
 
$test=array();
for ($i=0; $i <= $cnt; $i++){
$name2 = $_POST['name2_'.$i];
 
$test[$i]=$name2;
 
//曜日で入れ替え
if($week1 == '月'){
$yotei1 = $_POST["yotei1_".$i];
$yotei2 = $_POST["yotei2_".$i];
$yotei3 = $_POST["yotei3_".$i];
$yotei4 = $_POST["yotei4_".$i];
$yotei5 = $_POST["yotei5_".$i];
$yotei6 = $_POST["yotei6_".$i];
$yobi4 = $_POST["yobi4_".$i];
$start1 = $_POST["start1_".$i];
$start2 = $_POST["start2_".$i];
$start3 = $_POST["start3_".$i];
$start4 = $_POST["start4_".$i];
$start5 = $_POST["start5_".$i];
$start6 = $_POST["start6_".$i];
$yobi5 = $_POST["yobi5_".$i];
$end1 = $_POST["end1_".$i];
$end2 = $_POST["end2_".$i];
$end3 = $_POST["end3_".$i];
$end4 = $_POST["end4_".$i];
$end5 = $_POST["end5_".$i];
$end6 = $_POST["end6_".$i];
$yobi6 = $_POST["yobi6_".$i];
}elseif($week1 == '火'){
$yotei1 = $_POST["yobi4_".$i];
$yotei2 = $_POST["yotei1_".$i];
$yotei3 = $_POST["yotei2_".$i];
$yotei4 = $_POST["yotei3_".$i];
$yotei5 = $_POST["yotei4_".$i];
$yotei6 = $_POST["yotei5_".$i];
$yobi4 = $_POST["yotei6_".$i];
$start1 = $_POST["yobi5_".$i];
$start2 = $_POST["start1_".$i];
$start3 = $_POST["start2_".$i];
$start4 = $_POST["start3_".$i];
$start5 = $_POST["start4_".$i];
$start6 = $_POST["start5_".$i];
$yobi5 = $_POST["start6_".$i];
$end1 = $_POST["yobi6_".$i];
$end2 = $_POST["end1_".$i];
$end3 = $_POST["end2_".$i];
$end4 = $_POST["end3_".$i];
$end5 = $_POST["end4_".$i];
$end6 = $_POST["end5_".$i];
$yobi6 = $_POST["end6_".$i];
}elseif($week1 == '水'){
$yotei1 = $_POST["yotei6_".$i];
$yotei2 = $_POST["yobi4_".$i];
$yotei3 = $_POST["yotei1_".$i];
$yotei4 = $_POST["yotei2_".$i];
$yotei5 = $_POST["yotei3_".$i];
$yotei6 = $_POST["yotei4_".$i];
$yobi4 = $_POST["yotei5_".$i];
$start1 = $_POST["start6_".$i];
$start2 = $_POST["yobi5_".$i];
$start3 = $_POST["start1_".$i];
$start4 = $_POST["start2_".$i];
$start5 = $_POST["start3_".$i];
$start6 = $_POST["start4_".$i];
$yobi5 = $_POST["start5_".$i];
$end1 = $_POST["end6_".$i];
$end2 = $_POST["yobi6_".$i];
$end3 = $_POST["end1_".$i];
$end4 = $_POST["end2_".$i];
$end5 = $_POST["end3_".$i];
$end6 = $_POST["end4_".$i];
$yobi6 = $_POST["end5_".$i];
}elseif($week1 == '木'){
$yotei1 = $_POST["yotei5_".$i];
$yotei2 = $_POST["yotei6_".$i];
$yotei3 = $_POST["yobi4_".$i];
$yotei4 = $_POST["yotei1_".$i];
$yotei5 = $_POST["yotei2_".$i];
$yotei6 = $_POST["yotei3_".$i];
$yobi4 = $_POST["yotei4_".$i];
$start1 = $_POST["start5_".$i];
$start2 = $_POST["start6_".$i];
$start3 = $_POST["yobi5_".$i];
$start4 = $_POST["start1_".$i];
$start5 = $_POST["start2_".$i];
$start6 = $_POST["start3_".$i];
$yobi5 = $_POST["start4_".$i];
$end1 = $_POST["end5_".$i];
$end2 = $_POST["end6_".$i];
$end3 = $_POST["yobi6_".$i];
$end4 = $_POST["end1_".$i];
$end5 = $_POST["end2_".$i];
$end6 = $_POST["end3_".$i];
$yobi6 = $_POST["end4_".$i];
}elseif($week1 == '金'){
$yotei1 = $_POST["yotei4_".$i];
$yotei2 = $_POST["yotei5_".$i];
$yotei3 = $_POST["yotei6_".$i];
$yotei4 = $_POST["yobi4_".$i];
$yotei5 = $_POST["yotei1_".$i];
$yotei6 = $_POST["yotei2_".$i];
$yobi4 = $_POST["yotei3_".$i];
$start1 = $_POST["start4_".$i];
$start2 = $_POST["start5_".$i];
$start3 = $_POST["start6_".$i];
$start4 = $_POST["yobi5_".$i];
$start5 = $_POST["start1_".$i];
$start6 = $_POST["start2_".$i];
$yobi5 = $_POST["start3_".$i];
$end1 = $_POST["end4_".$i];
$end2 = $_POST["end5_".$i];
$end3 = $_POST["end6_".$i];
$end4 = $_POST["yobi6_".$i];
$end5 = $_POST["end1_".$i];
$end6 = $_POST["end2_".$i];
$yobi6 = $_POST["end3_".$i];
}elseif($week1 == '土'){
$yotei1 = $_POST["yotei3_".$i];
$yotei2 = $_POST["yotei4_".$i];
$yotei3 = $_POST["yotei5_".$i];
$yotei4 = $_POST["yotei6_".$i];
$yotei5 = $_POST["yobi4_".$i];
$yotei6 = $_POST["yotei1_".$i];
$yobi4 = $_POST["yotei2_".$i];
$start1 = $_POST["start3_".$i];
$start2 = $_POST["start4_".$i];
$start3 = $_POST["start5_".$i];
$start4 = $_POST["start6_".$i];
$start5 = $_POST["yobi5_".$i];
$start6 = $_POST["start1_".$i];
$yobi5 = $_POST["start2_".$i];
$end1 = $_POST["end3_".$i];
$end2 = $_POST["end4_".$i];
$end3 = $_POST["end5_".$i];
$end4 = $_POST["end6_".$i];
$end5 = $_POST["yobi6_".$i];
$end6 = $_POST["end1_".$i];
$yobi6 = $_POST["end2_".$i];
}elseif($week1 == '日'){
$yotei1 = $_POST["yotei2_".$i];
$yotei2 = $_POST["yotei3_".$i];
$yotei3 = $_POST["yotei4_".$i];
$yotei4 = $_POST["yotei5_".$i];
$yotei5 = $_POST["yotei6_".$i];
$yotei6 = $_POST["yobi4_".$i];
$yobi4 = $_POST["yotei1_".$i];
$start1 = $_POST["start2_".$i];
$start2 = $_POST["start3_".$i];
$start3 = $_POST["start4_".$i];
$start4 = $_POST["start5_".$i];
$start5 = $_POST["start6_".$i];
$start6 = $_POST["yobi5_".$i];
$yobi5 = $_POST["start1_".$i];
$end1 = $_POST["end2_".$i];
$end2 = $_POST["end3_".$i];
$end3 = $_POST["end4_".$i];
$end4 = $_POST["end5_".$i];
$end5 = $_POST["end6_".$i];
$end6 = $_POST["yobi6_".$i];
$yobi6 = $_POST["end1_".$i];
}
$start1 = str_replace("\r\n" , "" , $start1); //改行コードを削除
$end1 = str_replace("\r\n" , "" , $end1); //改行コードを削除
$start2 = str_replace("\r\n" , "" , $start2); //改行コードを削除
$end2 = str_replace("\r\n" , "" , $end2); //改行コードを削除
$start3 = str_replace("\r\n" , "" , $start3); //改行コードを削除
$end3 = str_replace("\r\n" , "" , $end3); //改行コードを削除
$start4 = str_replace("\r\n" , "" , $start4); //改行コードを削除
$end4 = str_replace("\r\n" , "" , $end4); //改行コードを削除
$start5 = str_replace("\r\n" , "" , $start5); //改行コードを削除
$end5 = str_replace("\r\n" , "" , $end5); //改行コードを削除
$start6 = str_replace("\r\n" , "" , $start6); //改行コードを削除
$end6 = str_replace("\r\n" , "" , $end6); //改行コードを削除
 
$start1 = str_replace("\n" , "" , $start1); //改行コードを削除
$end1 = str_replace("\n" , "" , $end1); //改行コードを削除
$start2 = str_replace("\n" , "" , $start2); //改行コードを削除
$end2 = str_replace("\n" , "" , $end2); //改行コードを削除
$start3 = str_replace("\n" , "" , $start3); //改行コードを削除
$end3 = str_replace("\n" , "" , $end3); //改行コードを削除
$start4 = str_replace("\n" , "" , $start4); //改行コードを削除
$end4 = str_replace("\n" , "" , $end4); //改行コードを削除
$start5 = str_replace("\n" , "" , $start5); //改行コードを削除
$end5 = str_replace("\n" , "" , $end5); //改行コードを削除
$start6 = str_replace("\n" , "" , $start6); //改行コードを削除
$end6 = str_replace("\n" , "" , $end6); //改行コードを削除
$yobi9 = $_POST["yobi9_".$i];


//出勤開始時間を変換
include("parts/starttime_conversion.php");
 
 
mysqli_query($sql, "UPDATE `data` SET `yotei1`='$yotei1',`yotei2`='$yotei2',`yotei3`='$yotei3',`yotei4`='$yotei4',`yotei5`='$yotei5',`yotei6`='$yotei6',`yobi4`='$yobi4',`yobi9`='$yobi9' WHERE `name2` LIKE '$name2' LIMIT 1");
 
//echo "<div>$name2==>$yotei1=$start1=$end1=$yotei2=$start2=$end2=$yotei3=$start3=$end3=$yotei4=$start4=$end4=$yotei5=$start5=$end5=$yotei6=$start6=$end6=$yobi4=$yobi5=$yobi6</div>";
 
 
 
}//for end
//書き込み処理終了
}
$kigen = date('Ymd' , time() + (144+$jisa)*3600);
$edi = date('md' , time() + $jisa*3600);
?>
<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>当日出勤設定</h2>
  
<div class="page_base_in"> 

  <div class="page_base_box_top">
  <h3><?php echo $day1; ?>(<?php echo $week1; ?>)の出勤設定</h3>
  </div> 
  
  <div class="page_base_box">
  <h3>体験人数の設定</h3>
    <div class="todayscast_button"><a href="taiken.php?shop_id=<?php echo $shop_id; ?>" class="btn_2">体験人数を設定する</a></div> 
  </div>
  
  <div class="page_base_box_2">
  <h3>出勤を設定</h3>
  
  <div class="todayscast_attention">
  ※出勤を選択後、最後に必ず「送信」ボタンを押して下さい。<br />
  「送信」ボタンを押さないと反映されません。<br />
  <br />
  ※当日出勤は朝5:00にリセットされます。
  </div>
  <form action="schedule.php?shop_id=<?php echo $shop_id; ?>" method="post"><input type="hidden" name="mode" value="write">
	 <div class="wrapper">
	 <?php
  $result=mysqli_query($sql, "SELECT * From `data` WHERE yobi1='$shop_id' ORDER by id");
$cnt=mysqli_num_rows($result);
$ii=0;
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
//include('parts/schetime.php');
include('parts/starttime_conversion2.php');
//▽表示内容ここから

echo "<div class=\"element_cast\"><div class=\"top_cast_box\"><div class=\"top_cast_box_wrap\">\n";

	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"photo/nophoto_1.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}

echo "</div><div class=\"top_cast_box_button\">";
if($option1=='1'){
	echo '<div class="todayscast_hyouji">表示中</div>';
}elseif($option1=='2'){
	echo '<div class="todayscast_hyouji_no">非表示</div>';
}else{
	echo '<div class="todayscast_hyouji">表示中</div>';
}

echo "<input type=\"hidden\" name=\"name2_$ii\" value=\"$name2\">";

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
echo <<<GOLGO
<input type="hidden" name="yotei2_$ii" value="$yotei2" />
<input type="hidden" name="yotei3_$ii" value="$yotei3" />
<input type="hidden" name="yotei4_$ii" value="$yotei4" />
<input type="hidden" name="yotei5_$ii" value="$yotei5" />
<input type="hidden" name="yotei6_$ii" value="$yotei6" />
<input type="hidden" name="yobi4_$ii" value="$yobi4" />
<input type="hidden" name="yobi7_$ii" value="$kigen" />
<input type="hidden" name="yobi9_$ii" value="$edi" />
<input type="hidden" name="edittime_$ii" value="$edi" />
GOLGO;
	
if($getdays<1){
	if($yobi9==$edi){
if ($yotei1 == '2') {
echo <<<GOLGO
 <div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" checked="checked" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
} else {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
}
	}else{
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
	}
}else{
if ($yotei1 == '2') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" checked="checked" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
} else {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><label><input type="radio" name="yotei1_$ii" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label></p></div></div>
 <div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><label><input type="radio" name="yotei1_$ii" value="3" /><span class="todayscast_box_font">出勤</span></label></p></div></div>
GOLGO;
}
	}
	echo "<div class=\"clear\"></div></div><div class=\"top_cast_box_name\">".$name."</div></div></div>";
$ii++;
}

?>
  
    

    <!--element_1 end-->                                    
  </div><!--wrapper-->
  
      <div class="todayscast_button_2"><input type="hidden" name="cnt" value="<?=$cnt?>" />
      <button type="submit" class="formbtn_2">出勤を送信</button>
      </div>  
  </form>
  
  

    
  </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>