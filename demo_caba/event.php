<?php

	
	//設定ファイル読み込み
	require_once 'php/conf.php';
//============初期設定============
$last_year = 2037;
$wday_color = "cmt2"; //平日の文字色は黒
$sat_color = "event sat"; //土曜日の文字色は青
$sun_color = "event sun"; //日曜日の文字色は赤
$reg_color = "#cccccc"; //今日の日付の背景色は淡いピンク
//================================

//スーパーグローバル変数対策
if(!isset($PHP_SELF)){ $PHP_SELF = $_SERVER["PHP_SELF"]; }
if(!isset($action)){
	if($_GET['action']){
		$action = $_GET['action'];
	}else{
		$action = $_POST['action'];
	}
}
if(!isset($code)){
	if($_GET['code']){
		$code = $_GET['code'];
	}else{
		$code = $_POST['code'];
	}
}
if(!isset($year)){
	if($_GET['year']){
		$year = $_GET['year'];
	}else{
		$year = $_POST['year'];
	}
}
if(!isset($month)){
	if($_GET['month']){
		$month = $_GET['month'];
	}else{
		$month = $_POST['month'];
	}
}
if(!isset($day)){ $day = $_GET['day']; }
if(!isset($ayear)){ $ayear = $_POST['ayear']; }
if(!isset($amonth)){ $amonth = $_POST['amonth']; }
if(!isset($aday)){ $aday = $_POST['aday']; }
if(!isset($date)){ $date = $_POST['date']; }
if(!isset($comment)){ $comment = $_POST['comment']; }
if(!isset($c_color)){ $c_color = $_POST['c_color']; }
//エスケープ記号対策
$comment = stripslashes($comment);

//変数$yearがセットされていなければ当年
$year = (!isset($year)) ? date("Y") : $year;
//変数$monthがセットされていなければ当月
$month = (!isset($month)) ? date("n") : $month;
//移動用の年月を取得
if($month == 1){
	$pre_month = 12;
	$pre_year = $year - 1;
	$next_month = $month + 1;
	$next_year = $year;
}elseif($month == 12){
	$pre_month = $month - 1;
	$pre_year = $year;
	$next_month = 1;
	$next_year = $year + 1;
}else{
	$pre_month = $month - 1;
	$pre_year = $year;
	$next_month = $month + 1;
	$next_year = $year;
}
//変数$dayがセットされていなければ当日
$day = (!isset($day)) ? date("j") : $day;
$today = date("Ymd"); //今日の日付データ
$data_max = 100; //データ最大記録数
$data_file = '../log.csv';
$horiday_file = '../horiday.dat'; //休日用ファイル
$passwd = '777'; //管理者用パスワード
//書き込み処理
if($action == 'regist'){
	if($comment){
		//ここから書き込みデータの調整
		$date = $ayear . "/" . $amonth . "/" . $aday;
		$code = time(); //現在の秒数をゲット
		$comment = htmlspecialchars($comment);
		$comment = nl2br($comment);
		$comment = str_replace("\r", "", $comment);
		$comment = str_replace("\n", "", $comment);
		//ログファイルの区切文字(",")と区別するために文字コード(&#44)に書き換える。 
		$comment = str_replace(",", "&#44;",$comment);
		//日付の重複をチェック
		$message = file($data_file);
		$chk_flag = 0;
		for($i = 0; $i <= count($message); $i++){
			list($id,$code,$date,$c_color,$comment,$comment2,$photo1,$blank) = split( ",", $message[$i]);
			if($date == $cdate){
				$chk_flag++;
				break;
			}
		}
		unset($message);
		if($chk_flag < 1){
			$message = file($data_file);
			//配列要素を文字列により連結
			$input_msg = implode(",", array($id,$code,$date,$c_color,$comment,$comment2,$photo1,$blank));
			$fp = fopen($data_file, "w");
			rewind($fp);
			fputs($fp, "$input_msg\n");
			//最大記録数の調整
			if($data_max <= count($message)){
				$msg_num = $data_max - 1;
			}else{
				$msg_num = count($message);
			}
			for($i = 0; $i < $msg_num; $i++){
				fputs($fp, $message[$i]);
			}
			fclose($fp);
			unset($message);
		}
	}
//アップデート処理
}elseif($action == 'update'){
	$comment = str_replace(" ", "", $comment);
	$comment = str_replace("　", "", $comment);
	if($comment){
		$repdata = file($data_file);
		$fp = fopen($data_file, "w");
		for($i=0; $i<count($repdata); $i++){
			list($rid,$rcode,$rdate,$rc_color,$rcomment,$rcomment2,$rphoto1,$rblank) = split( ",", $repdata[$i]);
			if ($date == $rdate) {
				$comment = htmlspecialchars($comment);
				$comment = nl2br($comment);
				$comment = str_replace("\r", "", $comment);
				$comment = str_replace("\n", "", $comment);
				$repdata[$i] = "$code,$date,$c_color,$comment\n";
				fputs($fp, $repdata[$i]);
			} else {
				fputs($fp, $repdata[$i]);
			}
		}
		fclose($fp);
	}
//記事削除処理
}elseif($action == 'delete'){
	$deldata = file($data_file);
	$fp = fopen($data_file, "w");
	for($i=0; $i<count($deldata); $i++){
		list($did,$dcode,$ddate,$dc_color,$dcomment,$dcomment2,$dphoto1,$dblank) = split(",", $deldata[$i]);
		if ($code != $dcode) {
			fputs($fp, $deldata[$i]);
		}
	}
	fclose($fp);
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャバクラ　デモサイト「club CABAWEB キャバウェブ」</title>
<meta name="description" content="キャバクラデモサイトです。">
<meta name="keywords" content="キャバクラ,デモサイト">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">
<meta name="robots" content="noindex,nofollow">

</head>

<body>

<div id="top_fade">

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>CALENDAR</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">

    <div class="calendar_page_base">
    
      <div class="calendar_title">
      <?php 
	     if($month == '1'){
		echo "January"; 
		}elseif($month == '2'){
		echo "February"; 
		}elseif($month == '3'){
		echo "March"; 
		}elseif($month == '4'){
		echo "April"; 
		}elseif($month == '5'){
		echo "May"; 
		}elseif($month == '6'){
		echo "June"; 
		}elseif($month == '7'){
		echo "July"; 
		}elseif($month == '8'){
		echo "August"; 
		}elseif($month == '9'){
		echo "September"; 
		}elseif($month == '10'){
		echo "October"; 
		}elseif($month == '11'){
		echo "November"; 
		}elseif($month == '12'){
		echo "December"; 
		}
?><br />
      <span style="font-size: 60%;"><?php echo $year; ?>.<?php echo $month; ?></span>
      </div>
        <div id="shop_event">
          <table class="event_t">
            <tr class="cmt2">
              <td class="data">1</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">2</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #FFC;">誕生日</div>
              <div class="calendar_page_title"><a href="event_info_3.php" title="イベント詳細">あいちゃん誕生日</a></div>                
              </td>
            </tr>
            <tr class="event sat">
              <td class="data">3</td>
              <td class="naiyou">               
              </td>
            </tr>
            <tr class="event sun">
              <td class="data">4</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #F99;">店休日</div>
              <div class="calendar_page_title"><a href="event_info_2.php" title="イベント詳細">店休日</a></div>
              </td>
            </tr>
            <tr class="cmt2">
              <td class="data">5</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">6</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="event sat">
              <td class="data">7</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #CFF;">イベント</div>
              <div class="calendar_page_title"><a href="event_info.php" title="イベント詳細">コスプレDay</a></div>                
              </td>
            </tr>
            <tr class="event sun">
              <td class="data">8</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #F99;">店休日</div>
              <div class="calendar_page_title"><a href="event_info_2.php" title="イベント詳細">店休日</a></div>                
              </td>
            </tr>
            <tr class="cmt2">
              <td class="data">9</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">10</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">11</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">12</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">13</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="event sat">
              <td class="data">14</td>
              <td class="naiyou">               
              </td>
            </tr>
            <tr class="event sun">
              <td class="data">15</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #F99;">店休日</div>
              <div class="calendar_page_title"><a href="event_info_2.php" title="イベント詳細">店休日</a></div>                
              </td>
            </tr>
            <tr class="cmt2">
              <td class="data">16</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">17</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">18</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">19</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">20</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="event sat">
              <td class="data">21</td>
              <td class="naiyou">               
              </td>
            </tr>
            <tr class="event sun">
              <td class="data">22</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #F99;">店休日</div>
              <div class="calendar_page_title"><a href="event_info_2.php" title="イベント詳細">店休日</a></div>                
              </td>
            </tr>
            <tr class="cmt2">
              <td class="data">23</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">24</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">25</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">26</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">27</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="event sat">
              <td class="data">28</td>
              <td class="naiyou">               
              </td>
            </tr>
            <tr class="event sun">
              <td class="data">29</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #F99;">店休日</div>
              <div class="calendar_page_title"><a href="event_info_2.php" title="イベント詳細">店休日</a></div>                
              </td>
            </tr>
            <tr class="cmt2">
              <td class="data">30</td>
              <td class="naiyou"></td>
            </tr>
          </table>

          <div class="event_back"> <?php echo 
			"<A HREF=$PHP_SELF?year=$pre_year&month=$pre_month class=\"btn_2\">＜＜".$pre_month."月</A>"; ?></div>
          <div class="event_next"><?php echo 
			"<A HREF=$PHP_SELF?year=$next_year&month=$next_month class=\"btn_2\">".$next_month."月＞＞</A>"; ?></div>
        </div>
        <div class="clear"></div>      
        
    </div>

  </div>
</div><!--page_base_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--right-->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->
<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>
<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
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
<script>
$(function() {
var topBtn = $('#page-top-2');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
});
</script>
<!--サイド　プラグイン-->
</body>

</html>